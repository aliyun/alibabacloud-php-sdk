<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class ListAppsRequest extends Model
{
    /**
     * @description 过滤的应用id列表
     *
     * @var string
     */
    public $appIds;

    /**
     * @description 集成方式：- 一体化SDK：paasSDK - 样板间：standardRoom
     *
     * @var string
     */
    public $integrationMode;

    /**
     * @description 查询页码，参数为空默认查询第1页。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页显示个数，参数为空默认显示个数为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 应用状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appIds'          => 'AppIds',
        'integrationMode' => 'IntegrationMode',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->integrationMode) {
            $res['IntegrationMode'] = $this->integrationMode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['IntegrationMode'])) {
            $model->integrationMode = $map['IntegrationMode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
