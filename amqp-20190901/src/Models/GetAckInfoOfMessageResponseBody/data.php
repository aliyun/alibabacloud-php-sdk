<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetAckInfoOfMessageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ackErrorInfo;

    /**
     * @var string
     */
    public $ackResult;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $property;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'ackErrorInfo' => 'AckErrorInfo',
        'ackResult' => 'AckResult',
        'action' => 'Action',
        'code' => 'Code',
        'property' => 'Property',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackErrorInfo) {
            $res['AckErrorInfo'] = $this->ackErrorInfo;
        }

        if (null !== $this->ackResult) {
            $res['AckResult'] = $this->ackResult;
        }

        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                foreach ($this->property as $key1 => $value1) {
                    $res['Property'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['AckErrorInfo'])) {
            $model->ackErrorInfo = $map['AckErrorInfo'];
        }

        if (isset($map['AckResult'])) {
            $model->ackResult = $map['AckResult'];
        }

        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                foreach ($map['Property'] as $key1 => $value1) {
                    $model->property[$key1] = $value1;
                }
            }
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
