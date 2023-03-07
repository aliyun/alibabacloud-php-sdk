<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ModifyVisualServicePasswdRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The connection password of the VNC remote visualization service. The password must be 8 to 30 characters in length and include at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include:
     *
     * `()~! @#$%^&*-_+=|{}[]:;\"/<>,.? /`
     *
     * >  You must use HTTPS to call the API to ensure that the password remains confidential.
     * @example 1254****
     *
     * @var string
     */
    public $passwd;

    /**
     * @description The username of the cluster. Default value: root user. You can call the [ListUsers](~~188572~~) operation to query all users in a cluster.
     *
     * @example root
     *
     * @var string
     */
    public $runasUser;

    /**
     * @description The user password of the cluster.
     *
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
