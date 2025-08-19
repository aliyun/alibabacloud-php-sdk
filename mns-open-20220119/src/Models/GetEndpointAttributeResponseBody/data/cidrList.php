<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponseBody\data;

use AlibabaCloud\Dara\Model;

class cidrList extends Model
{
    /**
     * @var string
     */
    public $aclStrategy;

    /**
     * @var string
     */
    public $cidr;

    /**
     * @var int
     */
    public $createTime;
    protected $_name = [
        'aclStrategy' => 'AclStrategy',
        'cidr' => 'Cidr',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclStrategy) {
            $res['AclStrategy'] = $this->aclStrategy;
        }

        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['AclStrategy'])) {
            $model->aclStrategy = $map['AclStrategy'];
        }

        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
