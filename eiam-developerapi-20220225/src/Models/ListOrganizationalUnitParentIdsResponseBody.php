<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class ListOrganizationalUnitParentIdsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $parentIds;
    protected $_name = [
        'parentIds' => 'parentIds',
    ];

    public function validate()
    {
        if (\is_array($this->parentIds)) {
            Model::validateArray($this->parentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parentIds) {
            if (\is_array($this->parentIds)) {
                $res['parentIds'] = [];
                $n1 = 0;
                foreach ($this->parentIds as $item1) {
                    $res['parentIds'][$n1] = $item1;
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
        if (isset($map['parentIds'])) {
            if (!empty($map['parentIds'])) {
                $model->parentIds = [];
                $n1 = 0;
                foreach ($map['parentIds'] as $item1) {
                    $model->parentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
