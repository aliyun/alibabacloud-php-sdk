<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetCommissionDetailFileListResponseBody\data;

use AlibabaCloud\Dara\Model;

class fileList extends Model
{
    /**
     * @var string
     */
    public $commissionPolicyName;
    /**
     * @var string
     */
    public $fileType;
    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'commissionPolicyName' => 'CommissionPolicyName',
        'fileType'             => 'FileType',
        'fileUrl'              => 'FileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commissionPolicyName) {
            $res['CommissionPolicyName'] = $this->commissionPolicyName;
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
        if (isset($map['CommissionPolicyName'])) {
            $model->commissionPolicyName = $map['CommissionPolicyName'];
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
