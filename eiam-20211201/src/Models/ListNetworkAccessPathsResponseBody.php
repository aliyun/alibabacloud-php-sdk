<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessPathsResponseBody\networkAccessPaths;

class ListNetworkAccessPathsResponseBody extends Model
{
    /**
     * @var networkAccessPaths[]
     */
    public $networkAccessPaths;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkAccessPaths' => 'NetworkAccessPaths',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->networkAccessPaths)) {
            Model::validateArray($this->networkAccessPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAccessPaths) {
            if (\is_array($this->networkAccessPaths)) {
                $res['NetworkAccessPaths'] = [];
                $n1 = 0;
                foreach ($this->networkAccessPaths as $item1) {
                    $res['NetworkAccessPaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkAccessPaths'])) {
            if (!empty($map['NetworkAccessPaths'])) {
                $model->networkAccessPaths = [];
                $n1 = 0;
                foreach ($map['NetworkAccessPaths'] as $item1) {
                    $model->networkAccessPaths[$n1] = networkAccessPaths::fromMap($item1);
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
