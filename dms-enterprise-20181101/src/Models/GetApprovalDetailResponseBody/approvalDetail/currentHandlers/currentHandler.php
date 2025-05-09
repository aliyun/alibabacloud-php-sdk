<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers;

use AlibabaCloud\Dara\Model;

class currentHandler extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'id' => 'Id',
        'nickName' => 'NickName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        return $model;
    }
}
