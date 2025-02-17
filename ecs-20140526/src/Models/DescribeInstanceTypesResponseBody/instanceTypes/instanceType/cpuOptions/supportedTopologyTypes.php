<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\cpuOptions;

use AlibabaCloud\Dara\Model;

class supportedTopologyTypes extends Model
{
    /**
     * @var string[]
     */
    public $supportedTopologyType;
    protected $_name = [
        'supportedTopologyType' => 'SupportedTopologyType',
    ];

    public function validate()
    {
        if (\is_array($this->supportedTopologyType)) {
            Model::validateArray($this->supportedTopologyType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedTopologyType) {
            if (\is_array($this->supportedTopologyType)) {
                $res['SupportedTopologyType'] = [];
                $n1                           = 0;
                foreach ($this->supportedTopologyType as $item1) {
                    $res['SupportedTopologyType'][$n1++] = $item1;
                }
            }
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
        if (isset($map['SupportedTopologyType'])) {
            if (!empty($map['SupportedTopologyType'])) {
                $model->supportedTopologyType = [];
                $n1                           = 0;
                foreach ($map['SupportedTopologyType'] as $item1) {
                    $model->supportedTopologyType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
