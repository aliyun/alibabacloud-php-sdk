<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision\children;

use AlibabaCloud\Dara\Model;

class children extends Model
{
    /**
     * @var string
     */
    public $childDivisionName;
    protected $_name = [
        'childDivisionName' => 'ChildDivisionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childDivisionName) {
            $res['ChildDivisionName'] = $this->childDivisionName;
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
        if (isset($map['ChildDivisionName'])) {
            $model->childDivisionName = $map['ChildDivisionName'];
        }

        return $model;
    }
}
