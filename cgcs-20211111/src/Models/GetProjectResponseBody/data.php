<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetProjectResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\GetProjectResponseBody\data\projectQuotaLimit;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 项目关联的应用数量
     *
     * @var int
     */
    public $boundAppNums;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectMemo;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @description key : districtId
     *
     * @var projectQuotaLimit
     */
    public $projectQuotaLimit;
    protected $_name = [
        'boundAppNums'      => 'BoundAppNums',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'projectId'         => 'ProjectId',
        'projectMemo'       => 'ProjectMemo',
        'projectName'       => 'ProjectName',
        'projectQuotaLimit' => 'ProjectQuotaLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundAppNums) {
            $res['BoundAppNums'] = $this->boundAppNums;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectMemo) {
            $res['ProjectMemo'] = $this->projectMemo;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectQuotaLimit) {
            $res['ProjectQuotaLimit'] = null !== $this->projectQuotaLimit ? $this->projectQuotaLimit->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoundAppNums'])) {
            $model->boundAppNums = $map['BoundAppNums'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectMemo'])) {
            $model->projectMemo = $map['ProjectMemo'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectQuotaLimit'])) {
            $model->projectQuotaLimit = projectQuotaLimit::fromMap($map['ProjectQuotaLimit']);
        }

        return $model;
    }
}
