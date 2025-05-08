<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListStateConfigurationsResponseBody\stateConfigurations;

class ListStateConfigurationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stateConfigurations[]
     */
    public $stateConfigurations;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'stateConfigurations' => 'StateConfigurations',
    ];

    public function validate()
    {
        if (\is_array($this->stateConfigurations)) {
            Model::validateArray($this->stateConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stateConfigurations) {
            if (\is_array($this->stateConfigurations)) {
                $res['StateConfigurations'] = [];
                $n1 = 0;
                foreach ($this->stateConfigurations as $item1) {
                    $res['StateConfigurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StateConfigurations'])) {
            if (!empty($map['StateConfigurations'])) {
                $model->stateConfigurations = [];
                $n1 = 0;
                foreach ($map['StateConfigurations'] as $item1) {
                    $model->stateConfigurations[$n1++] = stateConfigurations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
