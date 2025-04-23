<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class ModifyVisualServicePasswdRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $passwd;

    /**
     * @var string
     */
    public $runasUser;

    /**
     * @var string
     */
    public $runasUserPassword;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'passwd' => 'Passwd',
        'runasUser' => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->passwd) {
            $res['Passwd'] = $this->passwd;
        }

        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }

        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Passwd'])) {
            $model->passwd = $map['Passwd'];
        }

        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }

        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }

        return $model;
    }
}
