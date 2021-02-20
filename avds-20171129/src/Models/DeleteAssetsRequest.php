<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DeleteAssetsRequest extends Model
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
     * @var string[]
     */
    public $assetIds;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceOwnerId' => 'ResourceOwnerId',
        'assetIds'        => 'AssetIds',
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
        if (null !== $this->assetIds) {
            $res['AssetIds'] = $this->assetIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAssetsRequest
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
        if (isset($map['AssetIds'])) {
            if (!empty($map['AssetIds'])) {
                $model->assetIds = $map['AssetIds'];
            }
        }

        return $model;
    }
}
