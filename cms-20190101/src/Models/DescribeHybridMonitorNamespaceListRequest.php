<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorNamespaceListRequest extends Model
{
    /**
     * @description The keyword that is used to search for namespaces.
     *
     * @example aliyun
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The name of the namespace.
     *
     * The name can contain uppercase letters, lowercase letters, digits, and hyphens (-).
     * @example aliyun-test
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * A minimum of 1 entry can be returned on each page. Default value: 10.
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
     * @description Specifies whether to return the configuration details of metric import tasks for Alibaba Cloud services and the number of metric import tasks for third-party services. Valid values:
     *
     *   true
     *   false (default value)
     *
     * @example false
     *
     * @var bool
     */
    public $showTaskStatistic;
    protected $_name = [
        'keyword'           => 'Keyword',
        'namespace'         => 'Namespace',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
        'showTaskStatistic' => 'ShowTaskStatistic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (null !== $this->showTaskStatistic) {
            $res['ShowTaskStatistic'] = $this->showTaskStatistic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorNamespaceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
        if (isset($map['ShowTaskStatistic'])) {
            $model->showTaskStatistic = $map['ShowTaskStatistic'];
        }

        return $model;
    }
}
