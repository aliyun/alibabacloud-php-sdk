<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponseBody\secretBindList;

use AlibabaCloud\Tea\Model;

class secretBind extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $phoneNoA;

    /**
     * @var string
     */
    public $secretNo;

    /**
     * @var string
     */
    public $subsId;
    protected $_name = [
        'code'      => 'Code',
        'extension' => 'Extension',
        'groupId'   => 'GroupId',
        'message'   => 'Message',
        'phoneNoA'  => 'PhoneNoA',
        'secretNo'  => 'SecretNo',
        'subsId'    => 'SubsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }
        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretBind
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }
        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }

        return $model;
    }
}
