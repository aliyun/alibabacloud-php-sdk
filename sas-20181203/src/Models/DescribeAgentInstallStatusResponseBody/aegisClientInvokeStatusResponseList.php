<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusResponseBody;

use AlibabaCloud\Dara\Model;

class aegisClientInvokeStatusResponseList extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $resuleCode;
    /**
     * @var int
     */
    public $result;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'message'    => 'Message',
        'resuleCode' => 'ResuleCode',
        'result'     => 'Result',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->resuleCode) {
            $res['ResuleCode'] = $this->resuleCode;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ResuleCode'])) {
            $model->resuleCode = $map['ResuleCode'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
