<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests\assignConfigContest\listObject;
use AlibabaCloud\Tea\Model;

class assignConfigContest extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $dataType;

    /**
     * @var listObject
     */
    public $listObject;

    /**
     * @example callStartTime
     *
     * @var string
     */
    public $name;

    /**
     * @example 4
     *
     * @var int
     */
    public $symbol;

    /**
     * @example {\"start\":\"2022-09-01 00:00:00\",\"end\":\"2022-09-30 00:00:00\"}
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'dataType'   => 'DataType',
        'listObject' => 'ListObject',
        'name'       => 'Name',
        'symbol'     => 'Symbol',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->listObject) {
            $res['ListObject'] = null !== $this->listObject ? $this->listObject->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignConfigContest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['ListObject'])) {
            $model->listObject = listObject::fromMap($map['ListObject']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
