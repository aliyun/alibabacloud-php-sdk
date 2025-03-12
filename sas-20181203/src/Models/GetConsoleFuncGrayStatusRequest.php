<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetConsoleFuncGrayStatusRequest extends Model
{
    /**
     * @description Name of the function module.
     *
     * @example vpcConsoleSwitch
     *
     * @var string
     */
    public $condition;

    /**
     * @description Set the language type for request and response messages. Default value: **zh**. Values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'condition' => 'Condition',
        'lang'      => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsoleFuncGrayStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
