<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopOversoldGroupRequest extends Model
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
     * @var string[]
     */
    public $oversoldGroupIds;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'oversoldGroupIds' => 'OversoldGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->oversoldGroupIds)) {
            Model::validateArray($this->oversoldGroupIds);
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

        if (null !== $this->oversoldGroupIds) {
            if (\is_array($this->oversoldGroupIds)) {
                $res['OversoldGroupIds'] = [];
                $n1 = 0;
                foreach ($this->oversoldGroupIds as $item1) {
                    $res['OversoldGroupIds'][$n1++] = $item1;
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

        if (isset($map['OversoldGroupIds'])) {
            if (!empty($map['OversoldGroupIds'])) {
                $model->oversoldGroupIds = [];
                $n1 = 0;
                foreach ($map['OversoldGroupIds'] as $item1) {
                    $model->oversoldGroupIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
