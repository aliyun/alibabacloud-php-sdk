<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class GetDownloadFileRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $context;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $longJobId;
    protected $_name = [
        'context' => 'Context',
        'iotInstanceId' => 'IotInstanceId',
        'longJobId' => 'LongJobId',
    ];

    public function validate()
    {
        if (\is_array($this->context)) {
            Model::validateArray($this->context);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            if (\is_array($this->context)) {
                $res['Context'] = [];
                foreach ($this->context as $key1 => $value1) {
                    $res['Context'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->longJobId) {
            $res['LongJobId'] = $this->longJobId;
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
        if (isset($map['Context'])) {
            if (!empty($map['Context'])) {
                $model->context = [];
                foreach ($map['Context'] as $key1 => $value1) {
                    $model->context[$key1] = $value1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['LongJobId'])) {
            $model->longJobId = $map['LongJobId'];
        }

        return $model;
    }
}
