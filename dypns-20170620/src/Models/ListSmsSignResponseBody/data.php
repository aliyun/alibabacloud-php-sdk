<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\ListSmsSignResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var int
     */
    public $createDate;

    /**
     * @var bool
     */
    public $defaultFlag;

    /**
     * @var string
     */
    public $smsSignName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $testFlag;
    protected $_name = [
        'auditResult' => 'AuditResult',
        'createDate' => 'CreateDate',
        'defaultFlag' => 'DefaultFlag',
        'smsSignName' => 'SmsSignName',
        'status' => 'Status',
        'testFlag' => 'TestFlag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->defaultFlag) {
            $res['DefaultFlag'] = $this->defaultFlag;
        }

        if (null !== $this->smsSignName) {
            $res['SmsSignName'] = $this->smsSignName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->testFlag) {
            $res['TestFlag'] = $this->testFlag;
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
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DefaultFlag'])) {
            $model->defaultFlag = $map['DefaultFlag'];
        }

        if (isset($map['SmsSignName'])) {
            $model->smsSignName = $map['SmsSignName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TestFlag'])) {
            $model->testFlag = $map['TestFlag'];
        }

        return $model;
    }
}
