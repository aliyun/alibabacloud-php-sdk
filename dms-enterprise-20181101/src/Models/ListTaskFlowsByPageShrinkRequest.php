<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListTaskFlowsByPageShrinkRequest extends Model
{
    /**
     * @description Filter condition, task flow ID list.
     *
     * @var string
     */
    public $dagIdListShrink;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Filter condition, application scenario ID.
     *
     * @example 12***
     *
     * @var int
     */
    public $scenarioId;

    /**
     * @description The keyword that is used to search for task flow names.
     *
     * @example Test node
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagIdListShrink' => 'DagIdList',
        'pageIndex'       => 'PageIndex',
        'pageSize'        => 'PageSize',
        'scenarioId'      => 'ScenarioId',
        'searchKey'       => 'SearchKey',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagIdListShrink) {
            $res['DagIdList'] = $this->dagIdListShrink;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskFlowsByPageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagIdList'])) {
            $model->dagIdListShrink = $map['DagIdList'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
