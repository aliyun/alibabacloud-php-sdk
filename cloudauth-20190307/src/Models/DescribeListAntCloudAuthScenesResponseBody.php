<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListAntCloudAuthScenesResponseBody\scenes;

class DescribeListAntCloudAuthScenesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scenes[]
     */
    public $scenes;
    protected $_name = [
        'requestId' => 'RequestId',
        'scenes' => 'Scenes',
    ];

    public function validate()
    {
        if (\is_array($this->scenes)) {
            Model::validateArray($this->scenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['Scenes'] = [];
                $n1 = 0;
                foreach ($this->scenes as $item1) {
                    $res['Scenes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = [];
                $n1 = 0;
                foreach ($map['Scenes'] as $item1) {
                    $model->scenes[$n1] = scenes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
