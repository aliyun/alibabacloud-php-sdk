<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateReportEmailConfigStatusRequest extends Model
{
    /**
     * @var int
     */
    public $configStatus;

    /**
     * @var int
     */
    public $mailConfigId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'configStatus' => 'ConfigStatus',
        'mailConfigId' => 'MailConfigId',
        'operaUid'     => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }
        if (null !== $this->mailConfigId) {
            $res['MailConfigId'] = $this->mailConfigId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateReportEmailConfigStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }
        if (isset($map['MailConfigId'])) {
            $model->mailConfigId = $map['MailConfigId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
