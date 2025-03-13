<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\generateTraceability;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\generateTraceability\coordinates\generateCoordinate;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\generateTraceability\coordinates\newsCoordinate;
use AlibabaCloud\Tea\Model;

class coordinates extends Model
{
    /**
     * @var generateCoordinate
     */
    public $generateCoordinate;

    /**
     * @var newsCoordinate
     */
    public $newsCoordinate;
    protected $_name = [
        'generateCoordinate' => 'GenerateCoordinate',
        'newsCoordinate' => 'NewsCoordinate',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateCoordinate) {
            $res['GenerateCoordinate'] = null !== $this->generateCoordinate ? $this->generateCoordinate->toMap() : null;
        }
        if (null !== $this->newsCoordinate) {
            $res['NewsCoordinate'] = null !== $this->newsCoordinate ? $this->newsCoordinate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coordinates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateCoordinate'])) {
            $model->generateCoordinate = generateCoordinate::fromMap($map['GenerateCoordinate']);
        }
        if (isset($map['NewsCoordinate'])) {
            $model->newsCoordinate = newsCoordinate::fromMap($map['NewsCoordinate']);
        }

        return $model;
    }
}
