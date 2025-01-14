<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ExecDeploymentStageRequest extends Model
{
    /**
     * @description The code of the stage in the process. You can call the GetDeployment operation to query the code.
     *
     * This parameter is required.
     * @example DEV_CHECK
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the process.
     *
     * This parameter is required.
     * @example a7ef0634-20ec-4a7c-a214-54020f91XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'code'      => 'Code',
        'id'        => 'Id',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecDeploymentStageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
