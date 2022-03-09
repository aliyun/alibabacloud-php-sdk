<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataShareProjectRequest\shareUserDataRequest;
use AlibabaCloud\Tea\Model;

class ScanDataShareProjectRequest extends Model
{
    /**
     * @description 业务幂等ID，用于防止重复请求，写操作必传
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @description 需要分享的项目ID
     *
     * @var int
     */
    public $projectId;

    /**
     * @description 权限角色名，目前只支持项目管理员（PROJECT_MANAGER）
     *
     * @var string
     */
    public $roleName;

    /**
     * @description shareUserDataRequest
     *
     * @var shareUserDataRequest
     */
    public $shareUserDataRequest;

    /**
     * @description 对应数据源，目前仅支持广州三维家，需要新增源需要和接口负责人沟通并添加
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'bizOrderNo'           => 'BizOrderNo',
        'projectId'            => 'ProjectId',
        'roleName'             => 'RoleName',
        'shareUserDataRequest' => 'ShareUserDataRequest',
        'source'               => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->shareUserDataRequest) {
            $res['ShareUserDataRequest'] = null !== $this->shareUserDataRequest ? $this->shareUserDataRequest->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanDataShareProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['ShareUserDataRequest'])) {
            $model->shareUserDataRequest = shareUserDataRequest::fromMap($map['ShareUserDataRequest']);
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
