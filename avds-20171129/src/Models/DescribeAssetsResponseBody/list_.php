<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeAssetsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $lastScanDate;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $asset;
    protected $_name = [
        'type'         => 'Type',
        'lastScanDate' => 'LastScanDate',
        'expireTime'   => 'ExpireTime',
        'assetId'      => 'AssetId',
        'gmtCreate'    => 'GmtCreate',
        'source'       => 'Source',
        'asset'        => 'Asset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->lastScanDate) {
            $res['LastScanDate'] = $this->lastScanDate;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['LastScanDate'])) {
            $model->lastScanDate = $map['LastScanDate'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }

        return $model;
    }
}
