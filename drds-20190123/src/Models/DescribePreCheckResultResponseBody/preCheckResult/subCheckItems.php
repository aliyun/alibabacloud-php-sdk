<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult;

use AlibabaCloud\Dara\Model;

class subCheckItems extends Model
{
    /**
     * @var string
     */
    public $errorMsgCode;

    /**
     * @var string[]
     */
    public $errorMsgParams;

    /**
     * @var string
     */
    public $preCheckItemName;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'errorMsgCode' => 'ErrorMsgCode',
        'errorMsgParams' => 'ErrorMsgParams',
        'preCheckItemName' => 'PreCheckItemName',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->errorMsgParams)) {
            Model::validateArray($this->errorMsgParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsgCode) {
            $res['ErrorMsgCode'] = $this->errorMsgCode;
        }

        if (null !== $this->errorMsgParams) {
            if (\is_array($this->errorMsgParams)) {
                $res['ErrorMsgParams'] = [];
                $n1 = 0;
                foreach ($this->errorMsgParams as $item1) {
                    $res['ErrorMsgParams'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preCheckItemName) {
            $res['PreCheckItemName'] = $this->preCheckItemName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsgCode'])) {
            $model->errorMsgCode = $map['ErrorMsgCode'];
        }

        if (isset($map['ErrorMsgParams'])) {
            if (!empty($map['ErrorMsgParams'])) {
                $model->errorMsgParams = [];
                $n1 = 0;
                foreach ($map['ErrorMsgParams'] as $item1) {
                    $model->errorMsgParams[$n1] = $item1;
                    ++$n1;
                }
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
