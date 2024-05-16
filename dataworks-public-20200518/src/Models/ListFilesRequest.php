<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListFilesRequest extends Model
{
    /**
     * @var string
     */
    public $exactFileName;

    /**
     * @description The path of the files.
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @var string
     */
    public $fileIdIn;

    /**
     * @description The types of the code in the files.
     *
     * Valid values: 6 (Shell), 10 (ODPS SQL), 11 (ODPS MR), 23 (Data Integration), 24 (ODPS Script), 97 (PAI), 98 (node group), 99 (zero load), 221 (PyODPS 2), 225 (ODPS Spark), 227 (EMR Hive), 228 (EMR Spark), 229 (EMR Spark SQL), 230 (EMR MR), 239 (OSS object inspection), 257 (EMR Shell), 258 (EMR Spark Shell), 259 (EMR Presto), 260 (EMR Impala), 900 (real-time synchronization), 1002 (PAI inner node), 1089 (cross-tenant collaboration), 1091 (Hologres development), 1093 (Hologres SQL), 1100 (assignment), 1106 (for-each), and 1221 (PyODPS 3).
     * @example 10,23
     *
     * @var string
     */
    public $fileTypes;

    /**
     * @description The keyword in the file names. The keyword is used to perform a fuzzy match. You can specify a keyword to query all files whose names contain the keyword.
     *
     * @example ods
     *
     * @var string
     */
    public $keyword;

    /**
     * @var bool
     */
    public $needAbsoluteFolderPath;

    /**
     * @var bool
     */
    public $needContent;

    /**
     * @description The ID of the node that is scheduled. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID of the node.
     *
     * @example 123541234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The owner of the files.
     *
     * @example 3726346****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * You must configure either the ProjectId or ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace name.
     *
     * You must configure either the ProjectId or ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The module to which the files belong. Valid values:
     *
     *   NORMAL: The files are used for DataStudio.
     *   MANUAL: The files are used for manually triggered nodes.
     *   MANUAL_BIZ: The files are used for manually triggered workflows.
     *   SKIP: The files are used for dry-run nodes in DataStudio.
     *   ADHOCQUERY: The files are used for ad hoc queries.
     *   COMPONENT: The files are used for snippets.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'exactFileName'          => 'ExactFileName',
        'fileFolderPath'         => 'FileFolderPath',
        'fileIdIn'               => 'FileIdIn',
        'fileTypes'              => 'FileTypes',
        'keyword'                => 'Keyword',
        'needAbsoluteFolderPath' => 'NeedAbsoluteFolderPath',
        'needContent'            => 'NeedContent',
        'nodeId'                 => 'NodeId',
        'owner'                  => 'Owner',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'projectId'              => 'ProjectId',
        'projectIdentifier'      => 'ProjectIdentifier',
        'useType'                => 'UseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exactFileName) {
            $res['ExactFileName'] = $this->exactFileName;
        }
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->fileIdIn) {
            $res['FileIdIn'] = $this->fileIdIn;
        }
        if (null !== $this->fileTypes) {
            $res['FileTypes'] = $this->fileTypes;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->needAbsoluteFolderPath) {
            $res['NeedAbsoluteFolderPath'] = $this->needAbsoluteFolderPath;
        }
        if (null !== $this->needContent) {
            $res['NeedContent'] = $this->needContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExactFileName'])) {
            $model->exactFileName = $map['ExactFileName'];
        }
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['FileIdIn'])) {
            $model->fileIdIn = $map['FileIdIn'];
        }
        if (isset($map['FileTypes'])) {
            $model->fileTypes = $map['FileTypes'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['NeedAbsoluteFolderPath'])) {
            $model->needAbsoluteFolderPath = $map['NeedAbsoluteFolderPath'];
        }
        if (isset($map['NeedContent'])) {
            $model->needContent = $map['NeedContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
