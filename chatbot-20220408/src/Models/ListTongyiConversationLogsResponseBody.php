<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class ListTongyiConversationLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $costTime;

    /**
     * @var mixed[][]
     */
    public $datas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costTime' => 'CostTime',
        'datas' => 'Datas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->datas)) {
            Model::validateArray($this->datas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        if (null !== $this->datas) {
            if (\is_array($this->datas)) {
                $res['Datas'] = [];
                $n1 = 0;
                foreach ($this->datas as $item1) {
                    if (\is_array($item1)) {
                        $res['Datas'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Datas'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = [];
                $n1 = 0;
                foreach ($map['Datas'] as $item1) {
                    if (!empty($item1)) {
                        $model->datas[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->datas[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
