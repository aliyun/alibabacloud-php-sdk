<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @var int
     */
    public $directed;

    /**
     * @var string
     */
    public $displayColor;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $relationTypeId;

    /**
     * @var string
     */
    public $showType;
    protected $_name = [
        'directed'       => 'Directed',
        'displayColor'   => 'DisplayColor',
        'name'           => 'Name',
        'relationTypeId' => 'RelationTypeId',
        'showType'       => 'ShowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
        }
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->relationTypeId) {
            $res['RelationTypeId'] = $this->relationTypeId;
        }
        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RelationTypeId'])) {
            $model->relationTypeId = $map['RelationTypeId'];
        }
        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        return $model;
    }
}
