<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponseBody\engineConfigs;

class GetLindormEngineConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var engineConfigs[]
     */
    public $engineConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'engineConfigs' => 'EngineConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->engineConfigs)) {
            Model::validateArray($this->engineConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->engineConfigs) {
            if (\is_array($this->engineConfigs)) {
                $res['EngineConfigs'] = [];
                $n1 = 0;
                foreach ($this->engineConfigs as $item1) {
                    $res['EngineConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['EngineConfigs'])) {
            if (!empty($map['EngineConfigs'])) {
                $model->engineConfigs = [];
                $n1 = 0;
                foreach ($map['EngineConfigs'] as $item1) {
                    $model->engineConfigs[$n1] = engineConfigs::fromMap($item1);
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
