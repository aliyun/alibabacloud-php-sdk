<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class dimensionList extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dimensionType;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $factColumn;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $refUid;

    /**
     * @var string
     */
    public $tableUniqueId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'caption'       => 'Caption',
        'dataType'      => 'DataType',
        'dimensionType' => 'DimensionType',
        'expression'    => 'Expression',
        'factColumn'    => 'FactColumn',
        'granularity'   => 'Granularity',
        'refUid'        => 'RefUid',
        'tableUniqueId' => 'TableUniqueId',
        'uid'           => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->factColumn) {
            $res['FactColumn'] = $this->factColumn;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->refUid) {
            $res['RefUid'] = $this->refUid;
        }
        if (null !== $this->tableUniqueId) {
            $res['TableUniqueId'] = $this->tableUniqueId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['FactColumn'])) {
            $model->factColumn = $map['FactColumn'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['RefUid'])) {
            $model->refUid = $map['RefUid'];
        }
        if (isset($map['TableUniqueId'])) {
            $model->tableUniqueId = $map['TableUniqueId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
