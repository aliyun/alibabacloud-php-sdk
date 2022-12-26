<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusResponseBody;

use AlibabaCloud\Tea\Model;

class aegisClientInvokeStatusResponseList extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var string
     */
    public $resuleCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $result;

    /**
     * @example d123f6ae-9749-4338-8c7f-3c2c1ead****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return aegisClientInvokeStatusResponseList
     */
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
