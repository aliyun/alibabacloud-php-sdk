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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\generateTraceability\coordinates;
use AlibabaCloud\Tea\Model;

class generateTraceability extends Model
{
    /**
     * @var coordinates[]
     */
    public $coordinates;

    /**
     * @example 0.9
     *
     * @var float
     */
    public $duplicate;
    protected $_name = [
        'coordinates' => 'Coordinates',
        'duplicate' => 'Duplicate',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinates) {
            $res['Coordinates'] = [];
            if (null !== $this->coordinates && \is_array($this->coordinates)) {
                $n = 0;
                foreach ($this->coordinates as $item) {
                    $res['Coordinates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->duplicate) {
            $res['Duplicate'] = $this->duplicate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return generateTraceability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = [];
                $n = 0;
                foreach ($map['Coordinates'] as $item) {
                    $model->coordinates[$n++] = null !== $item ? coordinates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Duplicate'])) {
            $model->duplicate = $map['Duplicate'];
        }

        return $model;
    }
}
