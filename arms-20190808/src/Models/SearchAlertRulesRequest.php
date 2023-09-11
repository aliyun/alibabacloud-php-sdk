<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class SearchAlertRulesRequest extends Model
{
    /**
     * @description The id of AlertRule.
     *
     * @example 12345
     *
     * @var string
     */
    public $alertRuleId;

    /**
     * @description The type of the application that is associated with the alert rule. Valid values:
     *
     *   `TRACE`: application
     *   `RETCODE`: browser
     *
     * @example TRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @description The page number of the page to return. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return per page. Default value: `10`.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The process identifier (PID) of the application that is associated with the alert rule. For more information about how to obtain the PID, see [Obtain the PID of an application](https://help.aliyun.com/document_detail/186100.html?spm=a2c4g.11186623.6.792.1b50654cqcDPyk#title-imy-7gj-qhr).
     *
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID of the alert data. For more information about the mappings between **RegionId** and **SystemRegionId**, see the detailed description below the table.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. You can obtain the resource group ID in the **Resource Management** console.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The region ID of the alert rule. For more information about the mappings between **RegionId** and **SystemRegionId**, see the detailed description below the table.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $systemRegionId;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The alert rule name.
     *
     * @example AlertRuleTitle
     *
     * @var string
     */
    public $title;

    /**
     * @description The alert rule type. Valid values:
     *
     *   `1`: custom alert rules that are used to monitor drill-down data sets
     *   `3`: custom alert rules that are used to monitor tiled data sets
     *   `4`: alert rules that are used to monitor the browser, including the default frontend alert rules
     *   `5`: alert rules that are used to monitor applications, including the default application alert rules
     *   `6`: the default browser alert rules
     *   `7`: the default application alert rules
     *   `8`: Tracing Analysis alert rules
     *   `101`: Prometheus alert rules
     *
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
