<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile;

use AlibabaCloud\Dara\Model;

class filePropertyContent extends Model
{
    /**
     * @var int
     */
    public $businessId;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $parentFileId;
    protected $_name = [
        'businessId' => 'BusinessId',
        'currentVersion' => 'CurrentVersion',
        'dataSourceName' => 'DataSourceName',
        'folderId' => 'FolderId',
        'owner' => 'Owner',
        'parentFileId' => 'ParentFileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
