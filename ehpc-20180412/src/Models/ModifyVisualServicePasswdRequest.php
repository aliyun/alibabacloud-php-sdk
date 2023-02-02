<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ModifyVisualServicePasswdRequest extends Model
{
    /**
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1254****
     *
     * @var string
     */
    public $passwd;

    /**
     * @example root
     *
     * @var string
     */
    public $runasUser;

    /**
     * @example 2145****
     *
     * @var string
     */
    public $runasUserPassword;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'passwd'            => 'Passwd',
        'runasUser'         => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
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
