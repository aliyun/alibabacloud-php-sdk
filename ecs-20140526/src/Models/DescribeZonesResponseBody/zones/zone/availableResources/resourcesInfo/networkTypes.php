<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Dara\Model;

class networkTypes extends Model
{
    /**
     * @var string[]
     */
    public $supportedNetworkCategory;
    protected $_name = [
        'supportedNetworkCategory' => 'supportedNetworkCategory',
    ];

    public function validate()
    {
        if (\is_array($this->supportedNetworkCategory)) {
            Model::validateArray($this->supportedNetworkCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedNetworkCategory) {
            if (\is_array($this->supportedNetworkCategory)) {
                $res['supportedNetworkCategory'] = [];
                $n1 = 0;
                foreach ($this->supportedNetworkCategory as $item1) {
                    $res['supportedNetworkCategory'][$n1] = $item1;
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
        if (isset($map['supportedNetworkCategory'])) {
            if (!empty($map['supportedNetworkCategory'])) {
                $model->supportedNetworkCategory = [];
                $n1 = 0;
                foreach ($map['supportedNetworkCategory'] as $item1) {
                    $model->supportedNetworkCategory[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
