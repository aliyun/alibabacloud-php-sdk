<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;

class ListServerGroupServersRequest extends Model
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
    public $serverGroupId;

    /**
     * @var string[]
     */
    public $serverIds;

    /**
     * @var string[]
     */
    public $serverIps;

    /**
     * @var int
     */
    public $skip;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'serverGroupId' => 'ServerGroupId',
        'serverIds' => 'ServerIds',
        'serverIps' => 'ServerIps',
        'skip' => 'Skip',
    ];

    public function validate()
    {
        if (\is_array($this->serverIds)) {
            Model::validateArray($this->serverIds);
        }
        if (\is_array($this->serverIps)) {
            Model::validateArray($this->serverIps);
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

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        if (null !== $this->serverIds) {
            if (\is_array($this->serverIds)) {
                $res['ServerIds'] = [];
                $n1 = 0;
                foreach ($this->serverIds as $item1) {
                    $res['ServerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverIps) {
            if (\is_array($this->serverIps)) {
                $res['ServerIps'] = [];
                $n1 = 0;
                foreach ($this->serverIps as $item1) {
                    $res['ServerIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
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

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = [];
                $n1 = 0;
                foreach ($map['ServerIds'] as $item1) {
                    $model->serverIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerIps'])) {
            if (!empty($map['ServerIps'])) {
                $model->serverIps = [];
                $n1 = 0;
                foreach ($map['ServerIps'] as $item1) {
                    $model->serverIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        return $model;
    }
}
