<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody\aclRelations;

class ListAclRelationsResponseBody extends Model
{
    /**
     * @var aclRelations[]
     */
    public $aclRelations;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclRelations' => 'AclRelations',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aclRelations)) {
            Model::validateArray($this->aclRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclRelations) {
            if (\is_array($this->aclRelations)) {
                $res['AclRelations'] = [];
                $n1                  = 0;
                foreach ($this->aclRelations as $item1) {
                    $res['AclRelations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AclRelations'])) {
            if (!empty($map['AclRelations'])) {
                $model->aclRelations = [];
                $n1                  = 0;
                foreach ($map['AclRelations'] as $item1) {
                    $model->aclRelations[$n1++] = aclRelations::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
