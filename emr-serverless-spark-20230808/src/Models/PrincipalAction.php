<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class PrincipalAction extends Model
{
    /**
     * @var string
     */
    public $actionArn;

    /**
     * @var string
     */
    public $principalArn;
    protected $_name = [
        'actionArn' => 'actionArn',
        'principalArn' => 'principalArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionArn) {
            $res['actionArn'] = $this->actionArn;
        }

        if (null !== $this->principalArn) {
            $res['principalArn'] = $this->principalArn;
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
        if (isset($map['actionArn'])) {
            $model->actionArn = $map['actionArn'];
        }

        if (isset($map['principalArn'])) {
            $model->principalArn = $map['principalArn'];
        }

        return $model;
    }
}
