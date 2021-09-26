<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class UninstallLibrariesRequest extends Model
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
     * @var string[]
     */
    public $clusterBizIdList;

    /**
     * @var string
     */
    public $libraryBizId;
    protected $_name = [
        'resourceOwnerId'  => 'ResourceOwnerId',
        'regionId'         => 'RegionId',
        'clusterBizIdList' => 'ClusterBizIdList',
        'libraryBizId'     => 'LibraryBizId',
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
        if (null !== $this->clusterBizIdList) {
            $res['ClusterBizIdList'] = $this->clusterBizIdList;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallLibrariesRequest
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
        if (isset($map['ClusterBizIdList'])) {
            if (!empty($map['ClusterBizIdList'])) {
                $model->clusterBizIdList = $map['ClusterBizIdList'];
            }
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }

        return $model;
    }
}
