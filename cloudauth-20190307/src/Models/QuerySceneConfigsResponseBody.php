<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QuerySceneConfigsResponseBody\sceneConfigs;

class QuerySceneConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sceneConfigs[]
     */
    public $sceneConfigs;
    protected $_name = [
        'requestId' => 'RequestId',
        'sceneConfigs' => 'sceneConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->sceneConfigs)) {
            Model::validateArray($this->sceneConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneConfigs) {
            if (\is_array($this->sceneConfigs)) {
                $res['sceneConfigs'] = [];
                $n1 = 0;
                foreach ($this->sceneConfigs as $item1) {
                    $res['sceneConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['sceneConfigs'])) {
            if (!empty($map['sceneConfigs'])) {
                $model->sceneConfigs = [];
                $n1 = 0;
                foreach ($map['sceneConfigs'] as $item1) {
                    $model->sceneConfigs[$n1] = sceneConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
