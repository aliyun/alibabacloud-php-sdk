<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListFileTypeRequest extends Model
{
    /**
     * @description The name of the node type. You can log on to the DataWorks console, go to the DataStudio page, and then view the name of a specific node type on the left side of the page. Take note of the following items when you use this parameter:
     *
     *   You can view the English or Chinese name of a specific node type, but the language specified by this parameter to present the name must be the same as the language specified by the Locale parameter.
     *   Fuzzy match is supported.
     *   If this parameter is not specified, the names of all node types are returned.
     *
     * @example ODPS SQL
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language that you use for the query. Valid values: zh-CN and en-US.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * This parameter is required.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the workspace ID. You must configure either this parameter or the ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the workspace name.
     *
     * You must configure either the ProjectId or ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'keyword'           => 'Keyword',
        'locale'            => 'Locale',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
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

        return $model;
    }
}
