<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class InstallLibrariesRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string[]
     */
    public $clusterBizIdList;
    protected $_name = [
        'resourceOwnerId'  => 'ResourceOwnerId',
        'regionId'         => 'RegionId',
        'libraryBizId'     => 'LibraryBizId',
        'clusterBizIdList' => 'ClusterBizIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->clusterBizIdList) {
            $res['ClusterBizIdList'] = $this->clusterBizIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallLibrariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['ClusterBizIdList'])) {
            if (!empty($map['ClusterBizIdList'])) {
                $model->clusterBizIdList = $map['ClusterBizIdList'];
            }
        }

        return $model;
    }
}
