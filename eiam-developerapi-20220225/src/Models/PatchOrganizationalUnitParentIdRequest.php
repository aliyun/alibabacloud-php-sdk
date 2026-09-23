<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class PatchOrganizationalUnitParentIdRequest extends Model
{
    /**
     * @var string
     */
    public $parentId;
    protected $_name = [
        'parentId' => 'parentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}
