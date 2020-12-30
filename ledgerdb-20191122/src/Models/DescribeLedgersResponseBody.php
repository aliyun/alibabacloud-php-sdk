<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgersResponseBody\ledgers;
use AlibabaCloud\Tea\Model;

class DescribeLedgersResponseBody extends Model
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
     * @var int
     */
    public $maxResults;

    /**
     * @var ledgers[]
     */
    public $ledgers;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'maxResults' => 'MaxResults',
        'ledgers'    => 'Ledgers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->ledgers) {
            $res['Ledgers'] = [];
            if (null !== $this->ledgers && \is_array($this->ledgers)) {
                $n = 0;
                foreach ($this->ledgers as $item) {
                    $res['Ledgers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLedgersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Ledgers'])) {
            if (!empty($map['Ledgers'])) {
                $model->ledgers = [];
                $n              = 0;
                foreach ($map['Ledgers'] as $item) {
                    $model->ledgers[$n++] = null !== $item ? ledgers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
