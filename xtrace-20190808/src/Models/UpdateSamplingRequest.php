<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateSamplingRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $sampling;
    protected $_name = [
        'regionId'    => 'RegionId',
        'proxyUserId' => 'ProxyUserId',
        'sampling'    => 'Sampling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->sampling) {
            $res['Sampling'] = $this->sampling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSamplingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['Sampling'])) {
            $model->sampling = $map['Sampling'];
        }

        return $model;
    }
}
