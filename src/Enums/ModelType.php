<?php

declare(strict_types=1);

namespace Gemini\Enums;

enum ModelType: string
{
    case GEMINI_PRO = 'models/gemini-pro';
    case GEMINI_PRO_VISION = 'models/gemini-pro-vision';
    case GEMINI_1_5_PRO_LATEST = 'models/gemini-1.5-pro-latest';
    case EMBEDDING = 'models/embedding-001';
}
