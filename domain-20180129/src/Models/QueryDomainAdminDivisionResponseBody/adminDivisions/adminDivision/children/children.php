<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision\children;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childDivisionName) {
            $res['ChildDivisionName'] = $this->childDivisionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return children
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildDivisionName'])) {
            $model->childDivisionName = $map['ChildDivisionName'];
        }

        return $model;
    }
}
