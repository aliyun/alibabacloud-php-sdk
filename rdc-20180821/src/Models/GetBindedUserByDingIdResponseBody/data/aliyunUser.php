<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class aliyunUser extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $havanaId;

    /**
     * @var string
     */
    public $taobaoNick;

    /**
     * @var string
     */
    public $kp;

    /**
     * @var string
     */
    public $realname;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var int
     */
    public $accountStructure;

    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'email'            => 'Email',
        'havanaId'         => 'HavanaId',
        'taobaoNick'       => 'TaobaoNick',
        'kp'               => 'Kp',
        'realname'         => 'Realname',
        'nickName'         => 'NickName',
        'accountStructure' => 'AccountStructure',
        'aliyunId'         => 'AliyunId',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->havanaId) {
            $res['HavanaId'] = $this->havanaId;
        }
        if (null !== $this->taobaoNick) {
            $res['TaobaoNick'] = $this->taobaoNick;
        }
        if (null !== $this->kp) {
            $res['Kp'] = $this->kp;
        }
        if (null !== $this->realname) {
            $res['Realname'] = $this->realname;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->accountStructure) {
            $res['AccountStructure'] = $this->accountStructure;
        }
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aliyunUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['HavanaId'])) {
            $model->havanaId = $map['HavanaId'];
        }
        if (isset($map['TaobaoNick'])) {
            $model->taobaoNick = $map['TaobaoNick'];
        }
        if (isset($map['Kp'])) {
            $model->kp = $map['Kp'];
        }
        if (isset($map['Realname'])) {
            $model->realname = $map['Realname'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['AccountStructure'])) {
            $model->accountStructure = $map['AccountStructure'];
        }
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
