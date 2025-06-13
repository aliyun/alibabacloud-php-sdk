<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponseBody;

use AlibabaCloud\Dara\Model;

class bandwidthPackageIds extends Model
{
    /**
     * @var string[]
     */
    public $bandwidthPackageId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
    ];

    public function validate()
    {
        if (\is_array($this->bandwidthPackageId)) {
            Model::validateArray($this->bandwidthPackageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            if (\is_array($this->bandwidthPackageId)) {
                $res['BandwidthPackageId'] = [];
                $n1 = 0;
                foreach ($this->bandwidthPackageId as $item1) {
                    $res['BandwidthPackageId'][$n1] = $item1;
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
        if (isset($map['BandwidthPackageId'])) {
            if (!empty($map['BandwidthPackageId'])) {
                $model->bandwidthPackageId = [];
                $n1 = 0;
                foreach ($map['BandwidthPackageId'] as $item1) {
                    $model->bandwidthPackageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
