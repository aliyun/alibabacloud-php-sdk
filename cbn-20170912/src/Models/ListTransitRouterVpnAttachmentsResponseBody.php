<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpnAttachmentsResponseBody\transitRouterAttachments;

class ListTransitRouterVpnAttachmentsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;
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
    /**
     * @var transitRouterAttachments[]
     */
    public $transitRouterAttachments;
    protected $_name = [
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
        'transitRouterAttachments' => 'TransitRouterAttachments',
    ];

    public function validate()
    {
        if (\is_array($this->transitRouterAttachments)) {
            Model::validateArray($this->transitRouterAttachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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

        if (null !== $this->transitRouterAttachments) {
            if (\is_array($this->transitRouterAttachments)) {
                $res['TransitRouterAttachments'] = [];
                $n1                              = 0;
                foreach ($this->transitRouterAttachments as $item1) {
                    $res['TransitRouterAttachments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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

        if (isset($map['TransitRouterAttachments'])) {
            if (!empty($map['TransitRouterAttachments'])) {
                $model->transitRouterAttachments = [];
                $n1                              = 0;
                foreach ($map['TransitRouterAttachments'] as $item1) {
                    $model->transitRouterAttachments[$n1++] = transitRouterAttachments::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
