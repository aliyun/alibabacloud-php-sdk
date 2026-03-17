<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointNetworkQualitiesResponseBody\accessPointNetworkQualities;

class ListAccessPointNetworkQualitiesResponseBody extends Model
{
    /**
     * @var accessPointNetworkQualities[]
     */
    public $accessPointNetworkQualities;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessPointNetworkQualities' => 'AccessPointNetworkQualities',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->accessPointNetworkQualities)) {
            Model::validateArray($this->accessPointNetworkQualities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointNetworkQualities) {
            if (\is_array($this->accessPointNetworkQualities)) {
                $res['AccessPointNetworkQualities'] = [];
                $n1 = 0;
                foreach ($this->accessPointNetworkQualities as $item1) {
                    $res['AccessPointNetworkQualities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccessPointNetworkQualities'])) {
            if (!empty($map['AccessPointNetworkQualities'])) {
                $model->accessPointNetworkQualities = [];
                $n1 = 0;
                foreach ($map['AccessPointNetworkQualities'] as $item1) {
                    $model->accessPointNetworkQualities[$n1] = accessPointNetworkQualities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
