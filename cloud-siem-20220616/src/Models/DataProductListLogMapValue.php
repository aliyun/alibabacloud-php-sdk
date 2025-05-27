<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DataProductListLogMapValue\extraParameters;

class DataProductListLogMapValue extends Model
{
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
     * @var bool
     */
    public $canOperateOrNot;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var extraParameters[]
     */
    public $extraParameters;
    protected $_name = [
        'logCode' => 'LogCode',
        'logName' => 'LogName',
        'logNameEn' => 'LogNameEn',
        'logNameKey' => 'LogNameKey',
        'status' => 'Status',
        'canOperateOrNot' => 'CanOperateOrNot',
        'topic' => 'Topic',
        'extraParameters' => 'ExtraParameters',
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

        if (null !== $this->canOperateOrNot) {
            $res['CanOperateOrNot'] = $this->canOperateOrNot;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['CanOperateOrNot'])) {
            $model->canOperateOrNot = $map['CanOperateOrNot'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
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

        return $model;
    }
}
