<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability\coordinates;
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
        'duplicate'   => 'Duplicate',
    ];

    public function validate()
    {
    }

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
                $n                  = 0;
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
