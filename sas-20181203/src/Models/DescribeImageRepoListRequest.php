<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageRepoListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the field that is used for the query. Valid values:
     *
     *   **repoName**: the name of the image repository
     *   **repoNamespace**: the namespace to which the image repository belongs
     *
     * >  This parameter takes effect only when the **OperateType** parameter is set to **other**.
     * @example repoName
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The value of the field that is used for the query.
     *
     * >  This parameter takes effect only when the **OperateType** parameter is set to **other**.
     * @example zeus
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The type of the operation. Valid values:
     *
     *   **count**: counts statistics
     *   **other**: others
     *
     * @example count
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the image repository.
     *
     * @example script7
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example libssh2
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The condition by which the feature is applied. Valid values:
     *
     *   **image_repo**: the ID of the image repository
     *
     * @example image_repo
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the feature. Valid values:
     *
     *   **image_repo**: image repository protection
     *
     * @example image_repo
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'fieldName'     => 'FieldName',
        'fieldValue'    => 'FieldValue',
        'operateType'   => 'OperateType',
        'pageSize'      => 'PageSize',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'targetType'    => 'TargetType',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageRepoListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
