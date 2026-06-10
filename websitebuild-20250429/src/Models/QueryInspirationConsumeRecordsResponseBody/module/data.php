<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationConsumeRecordsResponseBody\module;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $amountStr;

    /**
     * @var string
     */
    public $consumeTime;

    /**
     * @var string
     */
    public $consumeType;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'amount' => 'Amount',
        'amountStr' => 'AmountStr',
        'consumeTime' => 'ConsumeTime',
        'consumeType' => 'ConsumeType',
        'metaData' => 'MetaData',
        'sceneName' => 'SceneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->amountStr) {
            $res['AmountStr'] = $this->amountStr;
        }

        if (null !== $this->consumeTime) {
            $res['ConsumeTime'] = $this->consumeTime;
        }

        if (null !== $this->consumeType) {
            $res['ConsumeType'] = $this->consumeType;
        }

        if (null !== $this->metaData) {
            $res['MetaData'] = $this->metaData;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AmountStr'])) {
            $model->amountStr = $map['AmountStr'];
        }

        if (isset($map['ConsumeTime'])) {
            $model->consumeTime = $map['ConsumeTime'];
        }

        if (isset($map['ConsumeType'])) {
            $model->consumeType = $map['ConsumeType'];
        }

        if (isset($map['MetaData'])) {
            $model->metaData = $map['MetaData'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
