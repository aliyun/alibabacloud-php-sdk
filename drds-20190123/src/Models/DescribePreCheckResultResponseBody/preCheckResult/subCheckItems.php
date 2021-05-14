<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult;

use AlibabaCloud\Tea\Model;

class subCheckItems extends Model
{
    /**
     * @var string
     */
    public $errorMsgCode;

    /**
     * @var string
     */
    public $preCheckItemName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string[]
     */
    public $errorMsgParams;
    protected $_name = [
        'errorMsgCode'     => 'ErrorMsgCode',
        'preCheckItemName' => 'PreCheckItemName',
        'state'            => 'State',
        'errorMsgParams'   => 'ErrorMsgParams',
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
        if (null !== $this->preCheckItemName) {
            $res['PreCheckItemName'] = $this->preCheckItemName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->errorMsgParams) {
            $res['ErrorMsgParams'] = $this->errorMsgParams;
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
        if (isset($map['PreCheckItemName'])) {
            $model->preCheckItemName = $map['PreCheckItemName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ErrorMsgParams'])) {
            if (!empty($map['ErrorMsgParams'])) {
                $model->errorMsgParams = $map['ErrorMsgParams'];
            }
        }

        return $model;
    }
}
