<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateStrictEventNameRequest extends Model
{
    /**
     * @description List of strict alarms to be operated on. This list is a complete list, and any strict alarms not included in this list will have the opposite operation performed.
     * > -
     * @var string[]
     */
    public $eventNameList;

    /**
     * @description Sets the language type for requests and received messages, default is **zh**. Values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Operation rule determination operator:
     * - *on*: Turn on the alarm
     * - *off*: Turn off the alarm
     *
     * This parameter is required.
     * @example on
     *
     * @var string
     */
    public $operator;
    protected $_name = [
        'eventNameList' => 'EventNameList',
        'lang'          => 'Lang',
        'operator'      => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventNameList) {
            $res['EventNameList'] = $this->eventNameList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStrictEventNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventNameList'])) {
            if (!empty($map['EventNameList'])) {
                $model->eventNameList = $map['EventNameList'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
