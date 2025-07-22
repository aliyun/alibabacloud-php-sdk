<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeSnatTableEntriesResponseBody extends Model
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
     * @var snatTableEntries[]
     */
    public $snatTableEntries;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'snatTableEntries' => 'SnatTableEntries',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->snatTableEntries) {
            $res['SnatTableEntries'] = [];
            if (null !== $this->snatTableEntries && \is_array($this->snatTableEntries)) {
                $n = 0;
                foreach ($this->snatTableEntries as $item) {
                    $res['SnatTableEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnatTableEntriesResponseBody
     */
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
        if (isset($map['SnatTableEntries'])) {
            if (!empty($map['SnatTableEntries'])) {
                $model->snatTableEntries = [];
                $n = 0;
                foreach ($map['SnatTableEntries'] as $item) {
                    $model->snatTableEntries[$n++] = null !== $item ? snatTableEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
