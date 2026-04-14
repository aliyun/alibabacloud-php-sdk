<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListNetworkServicesResponseBody\networkServices;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListNetworkServicesResponseBody\queues;

class ListNetworkServicesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var networkServices[]
     */
    public $networkServices;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var queues[]
     */
    public $queues;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'maxResults',
        'networkServices' => 'networkServices',
        'nextToken' => 'nextToken',
        'queues' => 'queues',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->networkServices)) {
            Model::validateArray($this->networkServices);
        }
        if (\is_array($this->queues)) {
            Model::validateArray($this->queues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->networkServices) {
            if (\is_array($this->networkServices)) {
                $res['networkServices'] = [];
                $n1 = 0;
                foreach ($this->networkServices as $item1) {
                    $res['networkServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->queues) {
            if (\is_array($this->queues)) {
                $res['queues'] = [];
                $n1 = 0;
                foreach ($this->queues as $item1) {
                    $res['queues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['networkServices'])) {
            if (!empty($map['networkServices'])) {
                $model->networkServices = [];
                $n1 = 0;
                foreach ($map['networkServices'] as $item1) {
                    $model->networkServices[$n1] = networkServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['queues'])) {
            if (!empty($map['queues'])) {
                $model->queues = [];
                $n1 = 0;
                foreach ($map['queues'] as $item1) {
                    $model->queues[$n1] = queues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
