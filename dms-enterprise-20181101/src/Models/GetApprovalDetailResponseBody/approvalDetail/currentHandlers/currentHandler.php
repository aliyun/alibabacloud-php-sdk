<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers;

use AlibabaCloud\Tea\Model;

class currentHandler extends Model
{
    /**
     * @var string
     */
    public $nickName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'nickName' => 'NickName',
        'id'       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
