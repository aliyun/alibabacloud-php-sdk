<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody;

use AlibabaCloud\Tea\Model;

class checkItemResults extends Model
{
    /**
     * @description The category of the inspection item. Valid values:
     *
     *   security: Security compliance
     *   performance: Performance efficiency
     *   stability: Business stability
     *   limitation: Service limits
     *   cost: Cost optimization
     *
     * @example stability
     *
     * @var string
     */
    public $category;

    /**
     * @description The unique identifier of the inspection item.
     *
     * @example APIServerClbInstanceStatus
     *
     * @var string
     */
    public $checkItemUid;

    /**
     * @description The description of the inspection item.
     *
     * @var string
     */
    public $description;

    /**
     * @description The fixing suggestion.
     *
     * @var string
     */
    public $fix;

    /**
     * @description The level of the inspection item. Valid values:
     *
     *   advice: Suggestions
     *   warning: Low severity
     *   error: Medium severity
     *   critical: High severity
     *
     * @example critical
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of the inspection item.
     *
     * @var string
     */
    public $name;

    /**
     * @description The inspection results. Valid values:
     *
     *   true: The inspection item is abnormal.
     *   false: The inspection item is normal.
     *   disable: The inspection item is not enabled.
     *
     * @example false
     *
     * @var string
     */
    public $result;

    /**
     * @description The resource type of the inspection object.
     *
     * @example CLB
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The inspection objects.
     *
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'category' => 'category',
        'checkItemUid' => 'checkItemUid',
        'description' => 'description',
        'fix' => 'fix',
        'level' => 'level',
        'name' => 'name',
        'result' => 'result',
        'targetType' => 'targetType',
        'targets' => 'targets',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->checkItemUid) {
            $res['checkItemUid'] = $this->checkItemUid;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->fix) {
            $res['fix'] = $this->fix;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }
        if (null !== $this->targets) {
            $res['targets'] = $this->targets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkItemResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['checkItemUid'])) {
            $model->checkItemUid = $map['checkItemUid'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['fix'])) {
            $model->fix = $map['fix'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }
        if (isset($map['targets'])) {
            if (!empty($map['targets'])) {
                $model->targets = $map['targets'];
            }
        }

        return $model;
    }
}
