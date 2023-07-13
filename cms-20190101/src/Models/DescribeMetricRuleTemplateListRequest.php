<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRuleTemplateListRequest extends Model
{
    /**
     * @description The name of the alert template.
     *
     * @example false
     *
     * @var bool
     */
    public $history;

    /**
     * @description The name of the application group.
     *
     * @example ECS
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of entries to return on each page.
     *
     * @example ECS_Template1
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the alert template.
     *
     * Default value: 0.
     * @example true
     *
     * @var bool
     */
    public $order;

    /**
     * @description The timestamp when the alert template was created.
     *
     * Unit: milliseconds.
     * @example gmtCreate
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The error message.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Specifies whether to display the application history of the alert templates. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the alert template.
     *
     * @example 70****
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'history'    => 'History',
        'keyword'    => 'Keyword',
        'name'       => 'Name',
        'order'      => 'Order',
        'orderBy'    => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->history) {
            $res['History'] = $this->history;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleTemplateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['History'])) {
            $model->history = $map['History'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
