<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAssetTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of active assets.
     *
     * @example 60
     *
     * @var int
     */
    public $assetActive;

    /**
     * @description The total number of assets.
     *
     * @example 80
     *
     * @var int
     */
    public $assetCount;

    /**
     * @description The number of deactivated assets.
     *
     * @example 20
     *
     * @var int
     */
    public $assetOffline;

    /**
     * @description The time for statistics. Specify a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683600042
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'assetActive' => 'AssetActive',
        'assetCount' => 'AssetCount',
        'assetOffline' => 'AssetOffline',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetActive) {
            $res['AssetActive'] = $this->assetActive;
        }
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }
        if (null !== $this->assetOffline) {
            $res['AssetOffline'] = $this->assetOffline;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetActive'])) {
            $model->assetActive = $map['AssetActive'];
        }
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }
        if (isset($map['AssetOffline'])) {
            $model->assetOffline = $map['AssetOffline'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
