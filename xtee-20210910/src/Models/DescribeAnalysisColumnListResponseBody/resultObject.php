<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisColumnListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $variableName;

    /**
     * @var string
     */
    public $variableTitle;

    /**
     * @var string
     */
    public $variableType;
    protected $_name = [
        'eventCode'     => 'eventCode',
        'eventName'     => 'eventName',
        'isDefault'     => 'isDefault',
        'variableName'  => 'variableName',
        'variableTitle' => 'variableTitle',
        'variableType'  => 'variableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }
        if (null !== $this->variableName) {
            $res['variableName'] = $this->variableName;
        }
        if (null !== $this->variableTitle) {
            $res['variableTitle'] = $this->variableTitle;
        }
        if (null !== $this->variableType) {
            $res['variableType'] = $this->variableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }
        if (isset($map['variableName'])) {
            $model->variableName = $map['variableName'];
        }
        if (isset($map['variableTitle'])) {
            $model->variableTitle = $map['variableTitle'];
        }
        if (isset($map['variableType'])) {
            $model->variableType = $map['variableType'];
        }

        return $model;
    }
}
