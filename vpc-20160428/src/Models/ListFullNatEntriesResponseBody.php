<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListFullNatEntriesResponseBody\fullNatEntries;
use AlibabaCloud\Tea\Model;

class ListFullNatEntriesResponseBody extends Model
{
    /**
     * @description The frontend port that is used for port mapping in FULLNAT entries. Valid values: **1** to **65535**.
     *
     * @var fullNatEntries[]
     */
    public $fullNatEntries;

    /**
     * @description Indicates whether the token for the next query exists. Valid values:
     *
     *   If the value of **NextToken** is empty, no next queries are sent.
     *   If the value of **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example fullnat-gw8fz23jezpbblf1j****
     *
     * @var string
     */
    public $fullNatTableId;

    /**
     * @description The NAT IP address that is used for address translation in FULLNAT entries.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The number of FULLNAT entries returned.
     *
     * @example ngw-gw8054kn57y3hq3bv****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The information about the FULLNAT entries that are queried.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the FULLNAT table to which the queried FULLNAT entries belong.
     *
     * @example F03E41F6-1A74-311F-8D98-124EEE9F37B8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 1
     *
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
