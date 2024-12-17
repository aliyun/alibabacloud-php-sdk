<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\generateTraceability\coordinates;

use AlibabaCloud\Tea\Model;

class generateCoordinate extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $x;

    /**
     * @example 1
     *
     * @var int
     */
    public $y;

    /**
     * @example 1
     *
     * @var int
     */
    public $z;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->z) {
            $res['Z'] = $this->z;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return generateCoordinate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Z'])) {
            $model->z = $map['Z'];
        }

        return $model;
    }
}
