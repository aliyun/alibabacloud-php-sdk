<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementConfigResponseBody\networkConfigs;

class GetRecallManagementConfigResponseBody extends Model
{
    /**
     * @var networkConfigs[]
     */
    public $networkConfigs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'networkConfigs' => 'NetworkConfigs',
        'requestId' => 'RequestId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->networkConfigs)) {
            Model::validateArray($this->networkConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkConfigs) {
            if (\is_array($this->networkConfigs)) {
                $res['NetworkConfigs'] = [];
                $n1 = 0;
                foreach ($this->networkConfigs as $item1) {
                    $res['NetworkConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['NetworkConfigs'])) {
            if (!empty($map['NetworkConfigs'])) {
                $model->networkConfigs = [];
                $n1 = 0;
                foreach ($map['NetworkConfigs'] as $item1) {
                    $model->networkConfigs[$n1] = networkConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
