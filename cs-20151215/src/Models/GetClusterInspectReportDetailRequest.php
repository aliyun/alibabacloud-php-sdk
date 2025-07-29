<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetClusterInspectReportDetailRequest extends Model
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
     * @example cost
     *
     * @var string
     */
    public $category;

    /**
     * @description Inspection results filtering. If this parameter is set to true, only abnormal inspection items are returned.
     *
     * @example true
     *
     * @var bool
     */
    public $enableFilter;

    /**
     * @description The query language.
     *
     *   zh_CN
     *   en_US
     *
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The level of the inspection item. Valid values:
     *
     *   advice: Suggestions
     *   warning: Low severity
     *   error: Medium severity
     *   critical: High severity
     *
     * @example error
     *
     * @var string
     */
    public $level;

    /**
     * @description The maximum number of entries per page. Maximum value: 50.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to display the returned tags on multiple pages.
     *
     * @example bb41e2bcb47b747389dce6c0d2
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the inspection object. Only items that meet the targetType parameter are returned.
     *
     * @example NodePool
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'category' => 'category',
        'enableFilter' => 'enableFilter',
        'language' => 'language',
        'level' => 'level',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'targetType' => 'targetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->enableFilter) {
            $res['enableFilter'] = $this->enableFilter;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterInspectReportDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['enableFilter'])) {
            $model->enableFilter = $map['enableFilter'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
