<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ValidateEmailRequest extends Model
{
    /**
     * @var bool
     */
    public $checkGraylist;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'checkGraylist' => 'CheckGraylist',
        'email' => 'Email',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkGraylist) {
            $res['CheckGraylist'] = $this->checkGraylist;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['CheckGraylist'])) {
            $model->checkGraylist = $map['CheckGraylist'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
