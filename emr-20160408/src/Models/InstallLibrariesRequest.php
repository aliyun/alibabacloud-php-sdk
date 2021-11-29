<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class InstallLibrariesRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterBizIdList;

    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clusterBizIdList' => 'ClusterBizIdList',
        'libraryBizId'     => 'LibraryBizId',
        'regionId'         => 'RegionId',
        'resourceOwnerId'  => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizIdList) {
            $res['ClusterBizIdList'] = $this->clusterBizIdList;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ClusterBizIdList'])) {
            if (!empty($map['ClusterBizIdList'])) {
                $model->clusterBizIdList = $map['ClusterBizIdList'];
            }
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
