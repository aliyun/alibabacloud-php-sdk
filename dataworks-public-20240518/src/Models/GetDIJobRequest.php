<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetDIJobRequest extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 11588
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 11588
     *
     * @var int
     */
    public $id;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Specifies whether to return detailed configuration information, including TransformationRules, TableMappings, and JobSettings. Valid values: true and false. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $withDetails;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'id' => 'Id',
        'projectId' => 'ProjectId',
        'withDetails' => 'WithDetails',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->withDetails) {
            $res['WithDetails'] = $this->withDetails;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['WithDetails'])) {
            $model->withDetails = $map['WithDetails'];
        }

        return $model;
    }
}
