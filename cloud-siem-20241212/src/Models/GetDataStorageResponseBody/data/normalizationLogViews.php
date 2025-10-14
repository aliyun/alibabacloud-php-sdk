<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data;

use AlibabaCloud\Dara\Model;

class normalizationLogViews extends Model
{
    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $detectionRuleReferenceCount;

    /**
     * @var string[]
     */
    public $detectionRuleReferenceProductIds;

    /**
     * @var string
     */
    public $logSearchConditions;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var bool
     */
    public $logViewExisted;

    /**
     * @var string
     */
    public $logViewName;
    protected $_name = [
        'activityName' => 'ActivityName',
        'categoryName' => 'CategoryName',
        'detectionRuleReferenceCount' => 'DetectionRuleReferenceCount',
        'detectionRuleReferenceProductIds' => 'DetectionRuleReferenceProductIds',
        'logSearchConditions' => 'LogSearchConditions',
        'logStoreName' => 'LogStoreName',
        'logViewExisted' => 'LogViewExisted',
        'logViewName' => 'LogViewName',
    ];

    public function validate()
    {
        if (\is_array($this->detectionRuleReferenceProductIds)) {
            Model::validateArray($this->detectionRuleReferenceProductIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->detectionRuleReferenceCount) {
            $res['DetectionRuleReferenceCount'] = $this->detectionRuleReferenceCount;
        }

        if (null !== $this->detectionRuleReferenceProductIds) {
            if (\is_array($this->detectionRuleReferenceProductIds)) {
                $res['DetectionRuleReferenceProductIds'] = [];
                $n1 = 0;
                foreach ($this->detectionRuleReferenceProductIds as $item1) {
                    $res['DetectionRuleReferenceProductIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logSearchConditions) {
            $res['LogSearchConditions'] = $this->logSearchConditions;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logViewExisted) {
            $res['LogViewExisted'] = $this->logViewExisted;
        }

        if (null !== $this->logViewName) {
            $res['LogViewName'] = $this->logViewName;
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
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['DetectionRuleReferenceCount'])) {
            $model->detectionRuleReferenceCount = $map['DetectionRuleReferenceCount'];
        }

        if (isset($map['DetectionRuleReferenceProductIds'])) {
            if (!empty($map['DetectionRuleReferenceProductIds'])) {
                $model->detectionRuleReferenceProductIds = [];
                $n1 = 0;
                foreach ($map['DetectionRuleReferenceProductIds'] as $item1) {
                    $model->detectionRuleReferenceProductIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LogSearchConditions'])) {
            $model->logSearchConditions = $map['LogSearchConditions'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogViewExisted'])) {
            $model->logViewExisted = $map['LogViewExisted'];
        }

        if (isset($map['LogViewName'])) {
            $model->logViewName = $map['LogViewName'];
        }

        return $model;
    }
}
