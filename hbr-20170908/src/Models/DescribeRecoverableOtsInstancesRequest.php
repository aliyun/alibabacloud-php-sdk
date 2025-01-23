<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribeRecoverableOtsInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    protected $_name = [
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
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
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        return $model;
    }
}
