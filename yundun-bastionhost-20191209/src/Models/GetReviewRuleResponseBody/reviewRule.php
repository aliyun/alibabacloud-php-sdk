<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetReviewRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetReviewRuleResponseBody\reviewRule\principals;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetReviewRuleResponseBody\reviewRule\projects;

class reviewRule extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var principals[]
     */
    public $principals;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var projects[]
     */
    public $projects;

    /**
     * @var string
     */
    public $reviewRuleId;

    /**
     * @var string
     */
    public $reviewRuleName;

    /**
     * @var int
     */
    public $scopeType;
    protected $_name = [
        'description' => 'Description',
        'principals' => 'Principals',
        'projectIds' => 'ProjectIds',
        'projects' => 'Projects',
        'reviewRuleId' => 'ReviewRuleId',
        'reviewRuleName' => 'ReviewRuleName',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
        if (\is_array($this->principals)) {
            Model::validateArray($this->principals);
        }
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->principals) {
            if (\is_array($this->principals)) {
                $res['Principals'] = [];
                $n1 = 0;
                foreach ($this->principals as $item1) {
                    $res['Principals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectIds) {
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['Projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['Projects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reviewRuleId) {
            $res['ReviewRuleId'] = $this->reviewRuleId;
        }

        if (null !== $this->reviewRuleName) {
            $res['ReviewRuleName'] = $this->reviewRuleName;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = [];
                $n1 = 0;
                foreach ($map['Principals'] as $item1) {
                    $model->principals[$n1] = principals::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['Projects'] as $item1) {
                    $model->projects[$n1] = projects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReviewRuleId'])) {
            $model->reviewRuleId = $map['ReviewRuleId'];
        }

        if (isset($map['ReviewRuleName'])) {
            $model->reviewRuleName = $map['ReviewRuleName'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
