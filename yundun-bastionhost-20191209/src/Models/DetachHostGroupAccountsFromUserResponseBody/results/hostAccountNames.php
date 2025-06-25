<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserResponseBody\results;

use AlibabaCloud\Dara\Model;

class hostAccountNames extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $hostAccountName;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'hostAccountName' => 'HostAccountName',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
