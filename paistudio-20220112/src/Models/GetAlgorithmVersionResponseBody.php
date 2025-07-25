<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmVersionResponseBody extends Model
{
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
     * @var AlgorithmSpec
     */
    public $algorithmSpec;

    /**
     * @example v0.0.1
     *
     * @var string
     */
    public $algorithmVersion;

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
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'algorithmName' => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'algorithmSpec' => 'AlgorithmSpec',
        'algorithmVersion' => 'AlgorithmVersion',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }
        if (null !== $this->algorithmSpec) {
            $res['AlgorithmSpec'] = null !== $this->algorithmSpec ? $this->algorithmSpec->toMap() : null;
        }
        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }
        if (isset($map['AlgorithmSpec'])) {
            $model->algorithmSpec = AlgorithmSpec::fromMap($map['AlgorithmSpec']);
        }
        if (isset($map['AlgorithmVersion'])) {
            $model->algorithmVersion = $map['AlgorithmVersion'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
