<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class algorithmVersions extends Model
{
    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $algorithmProvider;

    /**
     * @var string
     */
    public $algorithmVersion;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'algorithmName' => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'algorithmVersion' => 'AlgorithmVersion',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
