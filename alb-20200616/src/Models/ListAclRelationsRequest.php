<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class ListAclRelationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $aclIds;
    protected $_name = [
        'aclIds' => 'AclIds',
    ];

    public function validate()
    {
        if (\is_array($this->aclIds)) {
            Model::validateArray($this->aclIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclIds) {
            if (\is_array($this->aclIds)) {
                $res['AclIds'] = [];
                $n1 = 0;
                foreach ($this->aclIds as $item1) {
                    $res['AclIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = [];
                $n1 = 0;
                foreach ($map['AclIds'] as $item1) {
                    $model->aclIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
