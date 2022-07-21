<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision\children;
use AlibabaCloud\Tea\Model;

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
        'children'     => 'Children',
        'divisionName' => 'DivisionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = null !== $this->children ? $this->children->toMap() : null;
        }
        if (null !== $this->divisionName) {
            $res['DivisionName'] = $this->divisionName;
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
        if (isset($map['Children'])) {
            $model->children = children::fromMap($map['Children']);
        }
        if (isset($map['DivisionName'])) {
            $model->divisionName = $map['DivisionName'];
        }

        return $model;
    }
}
