<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLsResponseBody\acls;

use AlibabaCloud\Tea\Model;

class acl extends Model
{
    /**
     * @var string
     */
    public $sagCount;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'sagCount' => 'SagCount',
        'aclId'    => 'AclId',
        'name'     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sagCount) {
            $res['SagCount'] = $this->sagCount;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SagCount'])) {
            $model->sagCount = $map['SagCount'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
