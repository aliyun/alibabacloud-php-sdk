<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFileSystemsResponseBody\fileSystems;

class ListFileSystemsResponseBody extends Model
{
    /**
     * @var fileSystems[]
     */
    public $fileSystems;

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
        'fileSystems' => 'FileSystems',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->fileSystems)) {
            Model::validateArray($this->fileSystems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystems) {
            if (\is_array($this->fileSystems)) {
                $res['FileSystems'] = [];
                $n1 = 0;
                foreach ($this->fileSystems as $item1) {
                    $res['FileSystems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FileSystems'])) {
            if (!empty($map['FileSystems'])) {
                $model->fileSystems = [];
                $n1 = 0;
                foreach ($map['FileSystems'] as $item1) {
                    $model->fileSystems[$n1] = fileSystems::fromMap($item1);
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
