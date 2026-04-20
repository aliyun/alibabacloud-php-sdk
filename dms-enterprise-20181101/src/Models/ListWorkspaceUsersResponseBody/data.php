<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkspaceUsersResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $dmsUserId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'dmsUserId' => 'DmsUserId',
        'loginName' => 'LoginName',
        'nickName' => 'NickName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dmsUserId) {
            $res['DmsUserId'] = $this->dmsUserId;
        }

        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
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
        if (isset($map['DmsUserId'])) {
            $model->dmsUserId = $map['DmsUserId'];
        }

        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        return $model;
    }
}
