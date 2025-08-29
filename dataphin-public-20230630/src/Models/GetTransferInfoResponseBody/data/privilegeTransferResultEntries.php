<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class privilegeTransferResultEntries extends Model
{
    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $privilegeDisplayName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errMsg' => 'ErrMsg',
        'privilegeDisplayName' => 'PrivilegeDisplayName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->privilegeDisplayName) {
            $res['PrivilegeDisplayName'] = $this->privilegeDisplayName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['PrivilegeDisplayName'])) {
            $model->privilegeDisplayName = $map['PrivilegeDisplayName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
