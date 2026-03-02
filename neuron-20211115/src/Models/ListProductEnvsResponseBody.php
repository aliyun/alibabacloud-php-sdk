<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListProductEnvsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $envList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'envList' => 'envList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->envList)) {
            Model::validateArray($this->envList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envList) {
            if (\is_array($this->envList)) {
                $res['envList'] = [];
                $n1 = 0;
                foreach ($this->envList as $item1) {
                    $res['envList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['envList'])) {
            if (!empty($map['envList'])) {
                $model->envList = [];
                $n1 = 0;
                foreach ($map['envList'] as $item1) {
                    $model->envList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
