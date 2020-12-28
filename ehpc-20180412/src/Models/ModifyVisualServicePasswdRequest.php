<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ModifyVisualServicePasswdRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $runasUser;

    /**
     * @var string
     */
    public $runasUserPassword;

    /**
     * @var string
     */
    public $passwd;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'runasUser'         => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
        'passwd'            => 'Passwd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }
        if (null !== $this->passwd) {
            $res['Passwd'] = $this->passwd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVisualServicePasswdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }
        if (isset($map['Passwd'])) {
            $model->passwd = $map['Passwd'];
        }

        return $model;
    }
}
