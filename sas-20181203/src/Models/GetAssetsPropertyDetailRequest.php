<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailRequest\searchCriteriaList;
use AlibabaCloud\Tea\Model;

class GetAssetsPropertyDetailRequest extends Model
{
    /**
     * @description The type of the asset fingerprint that you want to query. Default value: **sca**. Valid values:
     *
     *   **lkm**: kernel module
     *   **autorun**: startup item
     *   **web_server**: website
     *
     * @example lkm
     *
     * @var string
     */
    public $biz;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the aggregation item for the asset fingerprint that you want to query.
     *
     * > You can call the [GetAssetsPropertyItem](~~GetAssetsPropertyItem~~) operation to query the names of aggregation items.
     * @example virtio
     *
     * @var string
     */
    public $itemName;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name or IP address of the server.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The conditions that are used to query the details about the asset fingerprint.
     *
     * @var searchCriteriaList[]
     */
    public $searchCriteriaList;

    /**
     * @description The UUID of the server.
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example 38f72ea4-4c9f-4df1-bc6c-0f267614****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'biz'                => 'Biz',
        'currentPage'        => 'CurrentPage',
        'itemName'           => 'ItemName',
        'lang'               => 'Lang',
        'pageSize'           => 'PageSize',
        'remark'             => 'Remark',
        'searchCriteriaList' => 'SearchCriteriaList',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->searchCriteriaList) {
            $res['SearchCriteriaList'] = [];
            if (null !== $this->searchCriteriaList && \is_array($this->searchCriteriaList)) {
                $n = 0;
                foreach ($this->searchCriteriaList as $item) {
                    $res['SearchCriteriaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssetsPropertyDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SearchCriteriaList'])) {
            if (!empty($map['SearchCriteriaList'])) {
                $model->searchCriteriaList = [];
                $n                         = 0;
                foreach ($map['SearchCriteriaList'] as $item) {
                    $model->searchCriteriaList[$n++] = null !== $item ? searchCriteriaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
