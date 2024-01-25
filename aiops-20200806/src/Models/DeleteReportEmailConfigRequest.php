<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DeleteReportEmailConfigRequest extends Model
{
    /**
     * @var int
     */
    public $mailConfigId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'mailConfigId' => 'MailConfigId',
        'operaUid'     => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DeleteReportEmailConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MailConfigId'])) {
            $model->mailConfigId = $map['MailConfigId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
