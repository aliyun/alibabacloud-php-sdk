<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $namespaceUsage;

    /**
     * @var string
     */
    public $repoQuota;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $chartNamespaceQuota;

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
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $chartRepoUsage;

    /**
     * @var string
     */
    public $chartNamespaceUsage;

    /**
     * @var string
     */
    public $chartRepoQuota;
    protected $_name = [
        'namespaceUsage'      => 'NamespaceUsage',
        'repoQuota'           => 'RepoQuota',
        'requestId'           => 'RequestId',
        'chartNamespaceQuota' => 'ChartNamespaceQuota',
        'repoUsage'           => 'RepoUsage',
        'namespaceQuota'      => 'NamespaceQuota',
        'code'                => 'Code',
        'isSuccess'           => 'IsSuccess',
        'chartRepoUsage'      => 'ChartRepoUsage',
        'chartNamespaceUsage' => 'ChartNamespaceUsage',
        'chartRepoQuota'      => 'ChartRepoQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceUsage) {
            $res['NamespaceUsage'] = $this->namespaceUsage;
        }
        if (null !== $this->repoQuota) {
            $res['RepoQuota'] = $this->repoQuota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->chartNamespaceQuota) {
            $res['ChartNamespaceQuota'] = $this->chartNamespaceQuota;
        }
        if (null !== $this->repoUsage) {
            $res['RepoUsage'] = $this->repoUsage;
        }
        if (null !== $this->namespaceQuota) {
            $res['NamespaceQuota'] = $this->namespaceQuota;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->chartRepoUsage) {
            $res['ChartRepoUsage'] = $this->chartRepoUsage;
        }
        if (null !== $this->chartNamespaceUsage) {
            $res['ChartNamespaceUsage'] = $this->chartNamespaceUsage;
        }
        if (null !== $this->chartRepoQuota) {
            $res['ChartRepoQuota'] = $this->chartRepoQuota;
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
        if (isset($map['NamespaceUsage'])) {
            $model->namespaceUsage = $map['NamespaceUsage'];
        }
        if (isset($map['RepoQuota'])) {
            $model->repoQuota = $map['RepoQuota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ChartNamespaceQuota'])) {
            $model->chartNamespaceQuota = $map['ChartNamespaceQuota'];
        }
        if (isset($map['RepoUsage'])) {
            $model->repoUsage = $map['RepoUsage'];
        }
        if (isset($map['NamespaceQuota'])) {
            $model->namespaceQuota = $map['NamespaceQuota'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ChartRepoUsage'])) {
            $model->chartRepoUsage = $map['ChartRepoUsage'];
        }
        if (isset($map['ChartNamespaceUsage'])) {
            $model->chartNamespaceUsage = $map['ChartNamespaceUsage'];
        }
        if (isset($map['ChartRepoQuota'])) {
            $model->chartRepoQuota = $map['ChartRepoQuota'];
        }

        return $model;
    }
}
