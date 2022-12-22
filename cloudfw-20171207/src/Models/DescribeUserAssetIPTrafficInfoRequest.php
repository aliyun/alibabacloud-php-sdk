<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserAssetIPTrafficInfoRequest extends Model
{
    /**
     * @description The IP address of the asset.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $assetIP;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The point in time to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656923760
     *
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
