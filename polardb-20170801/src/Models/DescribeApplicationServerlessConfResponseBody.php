<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationServerlessConfResponseBody\serverlessConfItems;

class DescribeApplicationServerlessConfResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverlessConfItems[]
     */
    public $serverlessConfItems;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'requestId' => 'RequestId',
        'serverlessConfItems' => 'ServerlessConfItems',
    ];

    public function validate()
    {
        if (\is_array($this->serverlessConfItems)) {
            Model::validateArray($this->serverlessConfItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serverlessConfItems) {
            if (\is_array($this->serverlessConfItems)) {
                $res['ServerlessConfItems'] = [];
                $n1 = 0;
                foreach ($this->serverlessConfItems as $item1) {
                    $res['ServerlessConfItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServerlessConfItems'])) {
            if (!empty($map['ServerlessConfItems'])) {
                $model->serverlessConfItems = [];
                $n1 = 0;
                foreach ($map['ServerlessConfItems'] as $item1) {
                    $model->serverlessConfItems[$n1] = serverlessConfItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
