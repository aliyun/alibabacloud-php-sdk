<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListServiceTaskResponseBody extends Model
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
     * @var mixed[][]
     */
    public $serviceTasks;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'serviceTasks' => 'serviceTasks',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->serviceTasks)) {
            Model::validateArray($this->serviceTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->serviceTasks) {
            if (\is_array($this->serviceTasks)) {
                $res['serviceTasks'] = [];
                $n1 = 0;
                foreach ($this->serviceTasks as $item1) {
                    if (\is_array($item1)) {
                        $res['serviceTasks'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['serviceTasks'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['serviceTasks'])) {
            if (!empty($map['serviceTasks'])) {
                $model->serviceTasks = [];
                $n1 = 0;
                foreach ($map['serviceTasks'] as $item1) {
                    if (!empty($item1)) {
                        $model->serviceTasks[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->serviceTasks[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
