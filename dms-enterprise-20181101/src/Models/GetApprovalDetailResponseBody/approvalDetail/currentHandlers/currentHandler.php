<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers;

use AlibabaCloud\Tea\Model;

class currentHandler extends Model
{
    /**
     * @description The ID of the user.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The nickname of the user.
     *
     * @example nickName
     *
     * @var string
     */
    public $nickName;
    protected $_name = [
        'id'       => 'Id',
        'nickName' => 'NickName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return currentHandler
     */
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
