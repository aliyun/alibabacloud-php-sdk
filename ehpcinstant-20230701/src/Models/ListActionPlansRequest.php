<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class ListActionPlansRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionPlanIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'actionPlanIds' => 'ActionPlanIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->actionPlanIds)) {
            Model::validateArray($this->actionPlanIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionPlanIds) {
            if (\is_array($this->actionPlanIds)) {
                $res['ActionPlanIds'] = [];
                $n1 = 0;
                foreach ($this->actionPlanIds as $item1) {
                    $res['ActionPlanIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['ActionPlanIds'])) {
            if (!empty($map['ActionPlanIds'])) {
                $model->actionPlanIds = [];
                $n1 = 0;
                foreach ($map['ActionPlanIds'] as $item1) {
                    $model->actionPlanIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
