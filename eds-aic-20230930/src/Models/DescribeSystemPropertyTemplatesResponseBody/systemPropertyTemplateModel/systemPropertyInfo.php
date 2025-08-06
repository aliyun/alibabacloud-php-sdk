<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel\systemPropertyInfo\customPropertyInfos;

class systemPropertyInfo extends Model
{
    /**
     * @var customPropertyInfos[]
     */
    public $customPropertyInfos;

    /**
     * @var string
     */
    public $roProductDevice;
    protected $_name = [
        'customPropertyInfos' => 'CustomPropertyInfos',
        'roProductDevice' => 'RoProductDevice',
    ];

    public function validate()
    {
        if (\is_array($this->customPropertyInfos)) {
            Model::validateArray($this->customPropertyInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPropertyInfos) {
            if (\is_array($this->customPropertyInfos)) {
                $res['CustomPropertyInfos'] = [];
                $n1 = 0;
                foreach ($this->customPropertyInfos as $item1) {
                    $res['CustomPropertyInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roProductDevice) {
            $res['RoProductDevice'] = $this->roProductDevice;
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
        if (isset($map['CustomPropertyInfos'])) {
            if (!empty($map['CustomPropertyInfos'])) {
                $model->customPropertyInfos = [];
                $n1 = 0;
                foreach ($map['CustomPropertyInfos'] as $item1) {
                    $model->customPropertyInfos[$n1] = customPropertyInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoProductDevice'])) {
            $model->roProductDevice = $map['RoProductDevice'];
        }

        return $model;
    }
}
