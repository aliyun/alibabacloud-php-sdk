<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceUsageResponseBody extends Model
{
    /**
     * @description The quota of chart namespaces.
     *
     * @example 50
     *
     * @var string
     */
    public $chartNamespaceQuota;

    /**
     * @description The number of chart namespaces that are created in the instance.
     *
     * @example 2
     *
     * @var string
     */
    public $chartNamespaceUsage;

    /**
     * @description The quota of chart repositories for the instance.
     *
     * @example 5000
     *
     * @var string
     */
    public $chartRepoQuota;

    /**
     * @description The number of chart repositories that are created.
     *
     * @example 5
     *
     * @var string
     */
    public $chartRepoUsage;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   `true`: The request is successful.
     *   `false`: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The quota of image namespaces for the instance.
     *
     * @example 100
     *
     * @var string
     */
    public $namespaceQuota;

    /**
     * @description The number of image namespaces that are created in the instance.
     *
     * @example 4
     *
     * @var string
     */
    public $namespaceUsage;

    /**
     * @description The quota of image repositories for the instance.
     *
     * @example 1000
     *
     * @var string
     */
    public $repoQuota;

    /**
     * @description The number of image repositories that are created in the instance.
     *
     * @example 2
     *
     * @var string
     */
    public $repoUsage;

    /**
     * @description The ID of the request.
     *
     * @example A726E801-7FCF-43F9-AF1C-51B3E65D3E7A
     *
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
