<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Dara\Model;

class supportedInstanceTypesList extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceTypesList;
    protected $_name = [
        'supportedInstanceTypesList' => 'SupportedInstanceTypesList',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInstanceTypesList)) {
            Model::validateArray($this->supportedInstanceTypesList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedInstanceTypesList) {
            if (\is_array($this->supportedInstanceTypesList)) {
                $res['SupportedInstanceTypesList'] = [];
                $n1                                = 0;
                foreach ($this->supportedInstanceTypesList as $item1) {
                    $res['SupportedInstanceTypesList'][$n1++] = $item1;
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
        if (isset($map['SupportedInstanceTypesList'])) {
            if (!empty($map['SupportedInstanceTypesList'])) {
                $model->supportedInstanceTypesList = [];
                $n1                                = 0;
                foreach ($map['SupportedInstanceTypesList'] as $item1) {
                    $model->supportedInstanceTypesList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
