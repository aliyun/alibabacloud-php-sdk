<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsUpsResponseBody;

use AlibabaCloud\Tea\Model;

class smsUps extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $destCode;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $sendTime;

    /**
     * @var string
     */
    public $sequenceId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'content'     => 'Content',
        'destCode'    => 'DestCode',
        'phoneNumber' => 'PhoneNumber',
        'sendTime'    => 'SendTime',
        'sequenceId'  => 'SequenceId',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->destCode) {
            $res['DestCode'] = $this->destCode;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->sequenceId) {
            $res['SequenceId'] = $this->sequenceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsUps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DestCode'])) {
            $model->destCode = $map['DestCode'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['SequenceId'])) {
            $model->sequenceId = $map['SequenceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
