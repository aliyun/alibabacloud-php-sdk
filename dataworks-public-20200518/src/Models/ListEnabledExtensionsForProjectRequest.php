<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListEnabledExtensionsForProjectRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console?spm=a2c4g.11186623.0.0.6b4d4941azHd2k) and go to the Workspace Management page to obtain the workspace ID.
     *
     * This parameter is required.
     * @example commit-file
     *
     * @var string
     */
    public $eventCode;

    /**
     * @description The ID of the request.
     *
     * @example 10
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The type of the code for the file.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'eventCode' => 'EventCode',
        'fileType'  => 'FileType',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnabledExtensionsForProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
