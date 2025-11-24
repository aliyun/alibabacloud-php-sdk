<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Dara\Model;

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
        'customTags' => 'CustomTags',
        'maxPathTagLength' => 'MaxPathTagLength',
        'sampling' => 'Sampling',
    ];

    public function validate()
    {
        if (\is_array($this->customTags)) {
            Model::validateArray($this->customTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTags) {
            if (\is_array($this->customTags)) {
                $res['CustomTags'] = [];
                foreach ($this->customTags as $key1 => $value1) {
                    $res['CustomTags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->maxPathTagLength) {
            $res['MaxPathTagLength'] = $this->maxPathTagLength;
        }

        if (null !== $this->sampling) {
            $res['Sampling'] = $this->sampling;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTags'])) {
            if (!empty($map['CustomTags'])) {
                $model->customTags = [];
                foreach ($map['CustomTags'] as $key1 => $value1) {
                    $model->customTags[$key1] = $value1;
                }
            }
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
