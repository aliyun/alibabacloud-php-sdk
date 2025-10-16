<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAckClusterNamespacesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $ackNamespaces;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ackNamespaces' => 'AckNamespaces',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ackNamespaces)) {
            Model::validateArray($this->ackNamespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackNamespaces) {
            if (\is_array($this->ackNamespaces)) {
                $res['AckNamespaces'] = [];
                $n1 = 0;
                foreach ($this->ackNamespaces as $item1) {
                    $res['AckNamespaces'][$n1] = $item1;
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
        if (isset($map['AckNamespaces'])) {
            if (!empty($map['AckNamespaces'])) {
                $model->ackNamespaces = [];
                $n1 = 0;
                foreach ($map['AckNamespaces'] as $item1) {
                    $model->ackNamespaces[$n1] = $item1;
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
