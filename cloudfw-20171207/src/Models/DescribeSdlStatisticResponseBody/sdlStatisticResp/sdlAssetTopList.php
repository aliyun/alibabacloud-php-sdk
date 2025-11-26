<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody\sdlStatisticResp;

use AlibabaCloud\Dara\Model;

class sdlAssetTopList extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var int
     */
    public $trafficBytes;
    protected $_name = [
        'assetType' => 'AssetType',
        'publicIp' => 'PublicIp',
        'trafficBytes' => 'TrafficBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->trafficBytes) {
            $res['TrafficBytes'] = $this->trafficBytes;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['TrafficBytes'])) {
            $model->trafficBytes = $map['TrafficBytes'];
        }

        return $model;
    }
}
