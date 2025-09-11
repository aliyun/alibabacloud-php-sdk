<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppPatchesResponseBody;

use AlibabaCloud\Dara\Model;

class patches extends Model
{
    /**
     * @var string
     */
    public $patchId;

    /**
     * @var string
     */
    public $patchName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDescription;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'patchId' => 'PatchId',
        'patchName' => 'PatchName',
        'status' => 'Status',
        'statusDescription' => 'StatusDescription',
        'updateTime' => 'UpdateTime',
        'uploadTime' => 'UploadTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->patchId) {
            $res['PatchId'] = $this->patchId;
        }

        if (null !== $this->patchName) {
            $res['PatchName'] = $this->patchName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
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
        if (isset($map['PatchId'])) {
            $model->patchId = $map['PatchId'];
        }

        if (isset($map['PatchName'])) {
            $model->patchName = $map['PatchName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
