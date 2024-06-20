<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example acl-xxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @var string[]
     */
    public $cidr;
    protected $_name = [
        'aclId' => 'AclId',
        'cidr'  => 'Cidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Cidr'])) {
            if (!empty($map['Cidr'])) {
                $model->cidr = $map['Cidr'];
            }
        }

        return $model;
    }
}
