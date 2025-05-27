<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList\logList\extraParameters;

class logList extends Model
{
    /**
     * @var bool
     */
    public $canOperateOrNot;

    /**
     * @var extraParameters[]
     */
    public $extraParameters;

    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var string
     */
    public $logNameEn;

    /**
     * @var string
     */
    public $logNameKey;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'canOperateOrNot' => 'CanOperateOrNot',
        'extraParameters' => 'ExtraParameters',
        'logCode' => 'LogCode',
        'logName' => 'LogName',
        'logNameEn' => 'LogNameEn',
        'logNameKey' => 'LogNameKey',
        'status' => 'Status',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->extraParameters)) {
            Model::validateArray($this->extraParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canOperateOrNot) {
            $res['CanOperateOrNot'] = $this->canOperateOrNot;
        }

        if (null !== $this->extraParameters) {
            if (\is_array($this->extraParameters)) {
                $res['ExtraParameters'] = [];
                $n1 = 0;
                foreach ($this->extraParameters as $item1) {
                    $res['ExtraParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }

        if (null !== $this->logNameEn) {
            $res['LogNameEn'] = $this->logNameEn;
        }

        if (null !== $this->logNameKey) {
            $res['LogNameKey'] = $this->logNameKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['CanOperateOrNot'])) {
            $model->canOperateOrNot = $map['CanOperateOrNot'];
        }

        if (isset($map['ExtraParameters'])) {
            if (!empty($map['ExtraParameters'])) {
                $model->extraParameters = [];
                $n1 = 0;
                foreach ($map['ExtraParameters'] as $item1) {
                    $model->extraParameters[$n1++] = extraParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }

        if (isset($map['LogNameEn'])) {
            $model->logNameEn = $map['LogNameEn'];
        }

        if (isset($map['LogNameKey'])) {
            $model->logNameKey = $map['LogNameKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
