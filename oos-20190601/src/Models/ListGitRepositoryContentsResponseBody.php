<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoryContentsResponseBody\contents;

class ListGitRepositoryContentsResponseBody extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contents' => 'Contents',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1] = contents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
