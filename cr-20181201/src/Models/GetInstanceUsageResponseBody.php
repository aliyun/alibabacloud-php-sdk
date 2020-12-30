<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceUsageResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $repoQuota;

    /**
     * @var string
     */
    public $repoUsage;

    /**
     * @var string
     */
    public $namespaceQuota;

    /**
     * @var string
     */
    public $namespaceUsage;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'      => 'IsSuccess',
        'requestId'      => 'RequestId',
        'repoQuota'      => 'RepoQuota',
        'repoUsage'      => 'RepoUsage',
        'namespaceQuota' => 'NamespaceQuota',
        'namespaceUsage' => 'NamespaceUsage',
        'code'           => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->repoQuota) {
            $res['RepoQuota'] = $this->repoQuota;
        }
        if (null !== $this->repoUsage) {
            $res['RepoUsage'] = $this->repoUsage;
        }
        if (null !== $this->namespaceQuota) {
            $res['NamespaceQuota'] = $this->namespaceQuota;
        }
        if (null !== $this->namespaceUsage) {
            $res['NamespaceUsage'] = $this->namespaceUsage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RepoQuota'])) {
            $model->repoQuota = $map['RepoQuota'];
        }
        if (isset($map['RepoUsage'])) {
            $model->repoUsage = $map['RepoUsage'];
        }
        if (isset($map['NamespaceQuota'])) {
            $model->namespaceQuota = $map['NamespaceQuota'];
        }
        if (isset($map['NamespaceUsage'])) {
            $model->namespaceUsage = $map['NamespaceUsage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
