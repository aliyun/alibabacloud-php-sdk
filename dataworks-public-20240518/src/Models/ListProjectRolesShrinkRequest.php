<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListProjectRolesShrinkRequest extends Model
{
    /**
     * @description The codes of roles in the DataWorks workspace.
     *
     * @var string
     */
    public $codesShrink;

    /**
     * @description The names of roles in the DataWorks workspace.
     *
     * @var string
     */
    public $namesShrink;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     *
     * This parameter is required.
     *
     * @example 21229
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the role. Valid values:
     *
     *   UserCustom: user-defined role
     *   System: system role
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'codesShrink' => 'Codes',
        'namesShrink' => 'Names',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->codesShrink) {
            $res['Codes'] = $this->codesShrink;
        }
        if (null !== $this->namesShrink) {
            $res['Names'] = $this->namesShrink;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectRolesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codes'])) {
            $model->codesShrink = $map['Codes'];
        }
        if (isset($map['Names'])) {
            $model->namesShrink = $map['Names'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
