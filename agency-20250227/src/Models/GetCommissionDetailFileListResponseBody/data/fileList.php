<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetCommissionDetailFileListResponseBody\data;

use AlibabaCloud\Dara\Model;

class fileList extends Model
{
    /**
     * @var string
     */
    public $bucketSyncStatus;

    /**
     * @var string
     */
    public $commissionPolicyName;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'bucketSyncStatus' => 'BucketSyncStatus',
        'commissionPolicyName' => 'CommissionPolicyName',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'fileUrl' => 'FileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketSyncStatus) {
            $res['BucketSyncStatus'] = $this->bucketSyncStatus;
        }

        if (null !== $this->commissionPolicyName) {
            $res['CommissionPolicyName'] = $this->commissionPolicyName;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
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
        if (isset($map['BucketSyncStatus'])) {
            $model->bucketSyncStatus = $map['BucketSyncStatus'];
        }

        if (isset($map['CommissionPolicyName'])) {
            $model->commissionPolicyName = $map['CommissionPolicyName'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
