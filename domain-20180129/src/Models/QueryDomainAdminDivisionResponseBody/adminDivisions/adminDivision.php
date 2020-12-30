<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision\children;
use AlibabaCloud\Tea\Model;

class adminDivision extends Model
{
    /**
     * @var string
     */
    public $divisionName;

    /**
     * @var children
     */
    public $children;
    protected $_name = [
        'divisionName' => 'DivisionName',
        'children'     => 'Children',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionName) {
            $res['DivisionName'] = $this->divisionName;
        }
        if (null !== $this->children) {
            $res['Children'] = null !== $this->children ? $this->children->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adminDivision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DivisionName'])) {
            $model->divisionName = $map['DivisionName'];
        }
        if (isset($map['Children'])) {
            $model->children = children::fromMap($map['Children']);
        }

        return $model;
    }
}
