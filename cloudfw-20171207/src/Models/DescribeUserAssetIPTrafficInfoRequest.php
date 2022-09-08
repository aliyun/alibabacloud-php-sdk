<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserAssetIPTrafficInfoRequest extends Model
{
    /**
     * @var string
     */
    public $assetIP;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $trafficTime;
    protected $_name = [
        'assetIP'     => 'AssetIP',
        'lang'        => 'Lang',
        'trafficTime' => 'TrafficTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetIP) {
            $res['AssetIP'] = $this->assetIP;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->trafficTime) {
            $res['TrafficTime'] = $this->trafficTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserAssetIPTrafficInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetIP'])) {
            $model->assetIP = $map['AssetIP'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TrafficTime'])) {
            $model->trafficTime = $map['TrafficTime'];
        }

        return $model;
    }
}
