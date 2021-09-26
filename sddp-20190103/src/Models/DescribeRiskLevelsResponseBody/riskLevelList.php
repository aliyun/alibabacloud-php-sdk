<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponseBody;

use AlibabaCloud\Tea\Model;

class riskLevelList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $referenceNum;
    protected $_name = [
        'name'         => 'Name',
        'description'  => 'Description',
        'alias'        => 'Alias',
        'id'           => 'Id',
        'referenceNum' => 'ReferenceNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ReferenceNum'])) {
            $model->referenceNum = $map['ReferenceNum'];
        }

        return $model;
    }
}
