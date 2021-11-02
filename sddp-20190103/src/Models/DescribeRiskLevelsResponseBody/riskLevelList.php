<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponseBody;

use AlibabaCloud\Tea\Model;

class riskLevelList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $referenceNum;
    protected $_name = [
        'description'  => 'Description',
        'id'           => 'Id',
        'name'         => 'Name',
        'referenceNum' => 'ReferenceNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->referenceNum) {
            $res['ReferenceNum'] = $this->referenceNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskLevelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReferenceNum'])) {
            $model->referenceNum = $map['ReferenceNum'];
        }

        return $model;
    }
}
