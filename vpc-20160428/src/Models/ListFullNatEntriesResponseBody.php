<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListFullNatEntriesResponseBody\fullNatEntries;
use AlibabaCloud\Tea\Model;

class ListFullNatEntriesResponseBody extends Model
{
    /**
     * @var fullNatEntries[]
     */
    public $fullNatEntries;

    /**
     * @var string
     */
    public $fullNatTableId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fullNatEntries' => 'FullNatEntries',
        'fullNatTableId' => 'FullNatTableId',
        'maxResults'     => 'MaxResults',
        'natGatewayId'   => 'NatGatewayId',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullNatEntries) {
            $res['FullNatEntries'] = [];
            if (null !== $this->fullNatEntries && \is_array($this->fullNatEntries)) {
                $n = 0;
                foreach ($this->fullNatEntries as $item) {
                    $res['FullNatEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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

    /**
     * @param array $map
     *
     * @return ListFullNatEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullNatEntries'])) {
            if (!empty($map['FullNatEntries'])) {
                $model->fullNatEntries = [];
                $n                     = 0;
                foreach ($map['FullNatEntries'] as $item) {
                    $model->fullNatEntries[$n++] = null !== $item ? fullNatEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FullNatTableId'])) {
            $model->fullNatTableId = $map['FullNatTableId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
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
