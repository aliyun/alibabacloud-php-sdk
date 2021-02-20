<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class AddAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var bool
     */
    public $startAfterVerified;

    /**
     * @var string
     */
    public $assetGroupId;

    /**
     * @var string[]
     */
    public $assets;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'sourceIp'           => 'SourceIp',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'startAfterVerified' => 'StartAfterVerified',
        'assetGroupId'       => 'AssetGroupId',
        'assets'             => 'Assets',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startAfterVerified) {
            $res['StartAfterVerified'] = $this->startAfterVerified;
        }
        if (null !== $this->assetGroupId) {
            $res['AssetGroupId'] = $this->assetGroupId;
        }
        if (null !== $this->assets) {
            $res['Assets'] = $this->assets;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartAfterVerified'])) {
            $model->startAfterVerified = $map['StartAfterVerified'];
        }
        if (isset($map['AssetGroupId'])) {
            $model->assetGroupId = $map['AssetGroupId'];
        }
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = $map['Assets'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
