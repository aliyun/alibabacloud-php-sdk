<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Dara\Model;

class instanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceType;
    protected $_name = [
        'supportedInstanceType' => 'supportedInstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInstanceType)) {
            Model::validateArray($this->supportedInstanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedInstanceType) {
            if (\is_array($this->supportedInstanceType)) {
                $res['supportedInstanceType'] = [];
                $n1 = 0;
                foreach ($this->supportedInstanceType as $item1) {
                    $res['supportedInstanceType'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['supportedInstanceType'])) {
            if (!empty($map['supportedInstanceType'])) {
                $model->supportedInstanceType = [];
                $n1 = 0;
                foreach ($map['supportedInstanceType'] as $item1) {
                    $model->supportedInstanceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
