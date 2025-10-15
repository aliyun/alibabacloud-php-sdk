<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForNetworkAccessEndpointResponseBody\applicationsForNetworkAccessEndpoint;

class ListApplicationsForNetworkAccessEndpointResponseBody extends Model
{
    /**
     * @var applicationsForNetworkAccessEndpoint[]
     */
    public $applicationsForNetworkAccessEndpoint;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applicationsForNetworkAccessEndpoint' => 'ApplicationsForNetworkAccessEndpoint',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->applicationsForNetworkAccessEndpoint)) {
            Model::validateArray($this->applicationsForNetworkAccessEndpoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationsForNetworkAccessEndpoint) {
            if (\is_array($this->applicationsForNetworkAccessEndpoint)) {
                $res['ApplicationsForNetworkAccessEndpoint'] = [];
                $n1 = 0;
                foreach ($this->applicationsForNetworkAccessEndpoint as $item1) {
                    $res['ApplicationsForNetworkAccessEndpoint'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ApplicationsForNetworkAccessEndpoint'])) {
            if (!empty($map['ApplicationsForNetworkAccessEndpoint'])) {
                $model->applicationsForNetworkAccessEndpoint = [];
                $n1 = 0;
                foreach ($map['ApplicationsForNetworkAccessEndpoint'] as $item1) {
                    $model->applicationsForNetworkAccessEndpoint[$n1] = applicationsForNetworkAccessEndpoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
