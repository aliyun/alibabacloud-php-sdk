<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class SearchAlertRulesRequest extends Model
{
    /**
     * @example 12345
     *
     * @var string
     */
    public $alertRuleId;

    /**
     * @example TRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $systemRegionId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example AlertRuleTitle
     *
     * @var string
     */
    public $title;

    /**
     * @example 4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alertRuleId'     => 'AlertRuleId',
        'appType'         => 'AppType',
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'pid'             => 'Pid',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'systemRegionId'  => 'SystemRegionId',
        'tags'            => 'Tags',
        'title'           => 'Title',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRuleId) {
            $res['AlertRuleId'] = $this->alertRuleId;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->systemRegionId) {
            $res['SystemRegionId'] = $this->systemRegionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRuleId'])) {
            $model->alertRuleId = $map['AlertRuleId'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SystemRegionId'])) {
            $model->systemRegionId = $map['SystemRegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
