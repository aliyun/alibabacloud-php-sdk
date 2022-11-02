<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Tea\Model;

class tracing extends Model
{
    /**
     * @var mixed[]
     */
    public $customTags;

    /**
     * @var int
     */
    public $maxPathTagLength;

    /**
     * @var float
     */
    public $sampling;
    protected $_name = [
        'customTags'       => 'CustomTags',
        'maxPathTagLength' => 'MaxPathTagLength',
        'sampling'         => 'Sampling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTags) {
            $res['CustomTags'] = $this->customTags;
        }
        if (null !== $this->maxPathTagLength) {
            $res['MaxPathTagLength'] = $this->maxPathTagLength;
        }
        if (null !== $this->sampling) {
            $res['Sampling'] = $this->sampling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tracing
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTags'])) {
            $model->customTags = $map['CustomTags'];
        }
        if (isset($map['MaxPathTagLength'])) {
            $model->maxPathTagLength = $map['MaxPathTagLength'];
        }
        if (isset($map['Sampling'])) {
            $model->sampling = $map['Sampling'];
        }

        return $model;
    }
}
