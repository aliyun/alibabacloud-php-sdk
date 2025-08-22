<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponseBody\multiCallChainInfos;

class GetMultipleTraceResponseBody extends Model
{
    /**
     * @var multiCallChainInfos[]
     */
    public $multiCallChainInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'multiCallChainInfos' => 'MultiCallChainInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->multiCallChainInfos)) {
            Model::validateArray($this->multiCallChainInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multiCallChainInfos) {
            if (\is_array($this->multiCallChainInfos)) {
                $res['MultiCallChainInfos'] = [];
                $n1 = 0;
                foreach ($this->multiCallChainInfos as $item1) {
                    $res['MultiCallChainInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MultiCallChainInfos'])) {
            if (!empty($map['MultiCallChainInfos'])) {
                $model->multiCallChainInfos = [];
                $n1 = 0;
                foreach ($map['MultiCallChainInfos'] as $item1) {
                    $model->multiCallChainInfos[$n1] = multiCallChainInfos::fromMap($item1);
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
