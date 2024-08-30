<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmResponseBody extends Model
{
    /**
     * @var string
     */
    public $algorithmDescription;

    /**
     * @example algo-xsldfvu1334
     *
     * @var string
     */
    public $algorithmId;

    /**
     * @example llm_training
     *
     * @var string
     */
    public $algorithmName;

    /**
     * @example pai
     *
     * @var string
     */
    public $algorithmProvider;

    /**
     * @example llm_training
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2024-07-10T11:49:47Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2024-07-10T11:49:47Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmDescription' => 'AlgorithmDescription',
        'algorithmId'          => 'AlgorithmId',
        'algorithmName'        => 'AlgorithmName',
        'algorithmProvider'    => 'AlgorithmProvider',
        'displayName'          => 'DisplayName',
        'gmtCreateTime'        => 'GmtCreateTime',
        'gmtModifiedTime'      => 'GmtModifiedTime',
        'requestId'            => 'RequestId',
        'tenantId'             => 'TenantId',
        'userId'               => 'UserId',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmDescription) {
            $res['AlgorithmDescription'] = $this->algorithmDescription;
        }
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmDescription'])) {
            $model->algorithmDescription = $map['AlgorithmDescription'];
        }
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
