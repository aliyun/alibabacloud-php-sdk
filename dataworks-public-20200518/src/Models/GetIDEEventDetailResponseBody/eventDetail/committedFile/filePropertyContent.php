<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile;

use AlibabaCloud\Tea\Model;

class filePropertyContent extends Model
{
    /**
     * @example 74328
     *
     * @var int
     */
    public $businessId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @example odps_first
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example aldurie78l2falure
     *
     * @var string
     */
    public $folderId;

    /**
     * @example 7384234****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1234122
     *
     * @var int
     */
    public $parentFileId;
    protected $_name = [
        'businessId'     => 'BusinessId',
        'currentVersion' => 'CurrentVersion',
        'dataSourceName' => 'DataSourceName',
        'folderId'       => 'FolderId',
        'owner'          => 'Owner',
        'parentFileId'   => 'ParentFileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parentFileId) {
            $res['ParentFileId'] = $this->parentFileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filePropertyContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParentFileId'])) {
            $model->parentFileId = $map['ParentFileId'];
        }

        return $model;
    }
}
