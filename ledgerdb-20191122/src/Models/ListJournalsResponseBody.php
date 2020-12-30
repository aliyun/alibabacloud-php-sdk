<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListJournalsResponseBody\journals;
use AlibabaCloud\Tea\Model;

class ListJournalsResponseBody extends Model
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
     * @var journals[]
     */
    public $journals;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'maxResults' => 'MaxResults',
        'journals'   => 'Journals',
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
        if (null !== $this->journals) {
            $res['Journals'] = [];
            if (null !== $this->journals && \is_array($this->journals)) {
                $n = 0;
                foreach ($this->journals as $item) {
                    $res['Journals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJournalsResponseBody
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
        if (isset($map['Journals'])) {
            if (!empty($map['Journals'])) {
                $model->journals = [];
                $n               = 0;
                foreach ($map['Journals'] as $item) {
                    $model->journals[$n++] = null !== $item ? journals::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
