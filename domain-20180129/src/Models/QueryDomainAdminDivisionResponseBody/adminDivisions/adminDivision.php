<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision\children;

class adminDivision extends Model
{
    /**
     * @var children
     */
    public $children;

    /**
     * @var string
     */
    public $divisionName;
    protected $_name = [
        'children' => 'Children',
        'divisionName' => 'DivisionName',
    ];

    public function validate()
    {
        if (null !== $this->children) {
            $this->children->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = null !== $this->children ? $this->children->toArray($noStream) : $this->children;
        }

        if (null !== $this->divisionName) {
            $res['DivisionName'] = $this->divisionName;
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
        if (isset($map['Children'])) {
            $model->children = children::fromMap($map['Children']);
        }

        if (isset($map['DivisionName'])) {
            $model->divisionName = $map['DivisionName'];
        }

        return $model;
    }
}
