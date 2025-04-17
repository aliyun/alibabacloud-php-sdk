<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryLocationDateClustersResponseBody extends Model
{
    /**
     * @var LocationDateCluster[]
     */
    public $locationDateClusters;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'locationDateClusters' => 'LocationDateClusters',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->locationDateClusters)) {
            Model::validateArray($this->locationDateClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locationDateClusters) {
            if (\is_array($this->locationDateClusters)) {
                $res['LocationDateClusters'] = [];
                $n1 = 0;
                foreach ($this->locationDateClusters as $item1) {
                    $res['LocationDateClusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['LocationDateClusters'])) {
            if (!empty($map['LocationDateClusters'])) {
                $model->locationDateClusters = [];
                $n1 = 0;
                foreach ($map['LocationDateClusters'] as $item1) {
                    $model->locationDateClusters[$n1++] = LocationDateCluster::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
