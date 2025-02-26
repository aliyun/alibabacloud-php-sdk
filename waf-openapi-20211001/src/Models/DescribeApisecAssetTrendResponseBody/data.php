<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAssetTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $assetActive;
    /**
     * @var int
     */
    public $assetCount;
    /**
     * @var int
     */
    public $assetOffline;
    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'assetActive'  => 'AssetActive',
        'assetCount'   => 'AssetCount',
        'assetOffline' => 'AssetOffline',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
