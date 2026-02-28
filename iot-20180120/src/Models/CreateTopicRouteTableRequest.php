<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class CreateTopicRouteTableRequest extends Model
{
    /**
     * @var string[]
     */
    public $dstTopic;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $srcTopic;
    protected $_name = [
        'dstTopic' => 'DstTopic',
        'iotInstanceId' => 'IotInstanceId',
        'srcTopic' => 'SrcTopic',
    ];

    public function validate()
    {
        if (\is_array($this->dstTopic)) {
            Model::validateArray($this->dstTopic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstTopic) {
            if (\is_array($this->dstTopic)) {
                $res['DstTopic'] = [];
                $n1 = 0;
                foreach ($this->dstTopic as $item1) {
                    $res['DstTopic'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->srcTopic) {
            $res['SrcTopic'] = $this->srcTopic;
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
        if (isset($map['DstTopic'])) {
            if (!empty($map['DstTopic'])) {
                $model->dstTopic = [];
                $n1 = 0;
                foreach ($map['DstTopic'] as $item1) {
                    $model->dstTopic[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['SrcTopic'])) {
            $model->srcTopic = $map['SrcTopic'];
        }

        return $model;
    }
}
