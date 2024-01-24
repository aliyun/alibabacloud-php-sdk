<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult;

use AlibabaCloud\Tea\Model;

class subCheckItems extends Model
{
    /**
     * @description Indicates the error code that is returned by a subtask.
     *
     * @example 1004
     *
     * @var string
     */
    public $errorMsgCode;

    /**
     * @description Indicates an error message.
     *
     * @var string[]
     */
    public $errorMsgParams;

    /**
     * @description Indicates the name of the subtask.
     *
     * @var string
     */
    public $preCheckItemName;

    /**
     * @description Indicates the state of the subtask.
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'errorMsgCode'     => 'ErrorMsgCode',
        'errorMsgParams'   => 'ErrorMsgParams',
        'preCheckItemName' => 'PreCheckItemName',
        'state'            => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsgCode) {
            $res['ErrorMsgCode'] = $this->errorMsgCode;
        }
        if (null !== $this->errorMsgParams) {
            $res['ErrorMsgParams'] = $this->errorMsgParams;
        }
        if (null !== $this->preCheckItemName) {
            $res['PreCheckItemName'] = $this->preCheckItemName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subCheckItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsgCode'])) {
            $model->errorMsgCode = $map['ErrorMsgCode'];
        }
        if (isset($map['ErrorMsgParams'])) {
            if (!empty($map['ErrorMsgParams'])) {
                $model->errorMsgParams = $map['ErrorMsgParams'];
            }
        }
        if (isset($map['PreCheckItemName'])) {
            $model->preCheckItemName = $map['PreCheckItemName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
