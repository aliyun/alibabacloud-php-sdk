<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetResponseBody\protocolMountTargets;

class DescribeProtocolMountTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var protocolMountTargets[]
     */
    public $protocolMountTargets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'protocolMountTargets' => 'ProtocolMountTargets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->protocolMountTargets)) {
            Model::validateArray($this->protocolMountTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->protocolMountTargets) {
            if (\is_array($this->protocolMountTargets)) {
                $res['ProtocolMountTargets'] = [];
                $n1 = 0;
                foreach ($this->protocolMountTargets as $item1) {
                    $res['ProtocolMountTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProtocolMountTargets'])) {
            if (!empty($map['ProtocolMountTargets'])) {
                $model->protocolMountTargets = [];
                $n1 = 0;
                foreach ($map['ProtocolMountTargets'] as $item1) {
                    $model->protocolMountTargets[$n1] = protocolMountTargets::fromMap($item1);
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
