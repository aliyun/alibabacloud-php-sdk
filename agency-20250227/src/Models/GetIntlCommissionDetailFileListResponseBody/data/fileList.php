<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetIntlCommissionDetailFileListResponseBody\data;

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
    protected $_name = [
        'bucketSyncStatus' => 'BucketSyncStatus',
        'commissionPolicyName' => 'CommissionPolicyName',
        'fileName' => 'FileName',
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

        return $model;
    }
}
