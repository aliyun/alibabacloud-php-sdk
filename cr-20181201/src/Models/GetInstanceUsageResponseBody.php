<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $chartNamespaceQuota;

    /**
     * @var string
     */
    public $chartNamespaceUsage;

    /**
     * @var string
     */
    public $chartRepoQuota;

    /**
     * @var string
     */
    public $chartRepoUsage;

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
    public $namespaceQuota;

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
    public $repoUsage;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chartNamespaceQuota' => 'ChartNamespaceQuota',
        'chartNamespaceUsage' => 'ChartNamespaceUsage',
        'chartRepoQuota'      => 'ChartRepoQuota',
        'chartRepoUsage'      => 'ChartRepoUsage',
        'code'                => 'Code',
        'isSuccess'           => 'IsSuccess',
        'namespaceQuota'      => 'NamespaceQuota',
        'namespaceUsage'      => 'NamespaceUsage',
        'repoQuota'           => 'RepoQuota',
        'repoUsage'           => 'RepoUsage',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chartNamespaceQuota) {
            $res['ChartNamespaceQuota'] = $this->chartNamespaceQuota;
        }
        if (null !== $this->chartNamespaceUsage) {
            $res['ChartNamespaceUsage'] = $this->chartNamespaceUsage;
        }
        if (null !== $this->chartRepoQuota) {
            $res['ChartRepoQuota'] = $this->chartRepoQuota;
        }
        if (null !== $this->chartRepoUsage) {
            $res['ChartRepoUsage'] = $this->chartRepoUsage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->namespaceQuota) {
            $res['NamespaceQuota'] = $this->namespaceQuota;
        }
        if (null !== $this->namespaceUsage) {
            $res['NamespaceUsage'] = $this->namespaceUsage;
        }
        if (null !== $this->repoQuota) {
            $res['RepoQuota'] = $this->repoQuota;
        }
        if (null !== $this->repoUsage) {
            $res['RepoUsage'] = $this->repoUsage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChartNamespaceQuota'])) {
            $model->chartNamespaceQuota = $map['ChartNamespaceQuota'];
        }
        if (isset($map['ChartNamespaceUsage'])) {
            $model->chartNamespaceUsage = $map['ChartNamespaceUsage'];
        }
        if (isset($map['ChartRepoQuota'])) {
            $model->chartRepoQuota = $map['ChartRepoQuota'];
        }
        if (isset($map['ChartRepoUsage'])) {
            $model->chartRepoUsage = $map['ChartRepoUsage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['NamespaceQuota'])) {
            $model->namespaceQuota = $map['NamespaceQuota'];
        }
        if (isset($map['NamespaceUsage'])) {
            $model->namespaceUsage = $map['NamespaceUsage'];
        }
        if (isset($map['RepoQuota'])) {
            $model->repoQuota = $map['RepoQuota'];
        }
        if (isset($map['RepoUsage'])) {
            $model->repoUsage = $map['RepoUsage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
