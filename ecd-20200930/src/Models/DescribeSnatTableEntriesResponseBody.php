<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries;

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

    public function validate()
    {
        if (\is_array($this->snatTableEntries)) {
            Model::validateArray($this->snatTableEntries);
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

        if (null !== $this->snatTableEntries) {
            if (\is_array($this->snatTableEntries)) {
                $res['SnatTableEntries'] = [];
                $n1 = 0;
                foreach ($this->snatTableEntries as $item1) {
                    $res['SnatTableEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['SnatTableEntries'])) {
            if (!empty($map['SnatTableEntries'])) {
                $model->snatTableEntries = [];
                $n1 = 0;
                foreach ($map['SnatTableEntries'] as $item1) {
                    $model->snatTableEntries[$n1] = snatTableEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
