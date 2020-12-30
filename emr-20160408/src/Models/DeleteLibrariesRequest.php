<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DeleteLibrariesRequest extends Model
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
    public $libraryBizIdList;
    protected $_name = [
        'resourceOwnerId'  => 'ResourceOwnerId',
        'regionId'         => 'RegionId',
        'libraryBizIdList' => 'LibraryBizIdList',
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
        if (null !== $this->libraryBizIdList) {
            $res['LibraryBizIdList'] = $this->libraryBizIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLibrariesRequest
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
        if (isset($map['LibraryBizIdList'])) {
            if (!empty($map['LibraryBizIdList'])) {
                $model->libraryBizIdList = $map['LibraryBizIdList'];
            }
        }

        return $model;
    }
}
