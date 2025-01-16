<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitProjectExportJobRequest extends Model
{
    /**
     * @example BaseTimeline
     *
     * @var string
     */
    public $exportType;

    /**
     * @description This parameter is required.
     *
     * @example {
     * }
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @example *****67ae06542b9b93e0d1c387*****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****4d7cf14dc7b83b0e801c****"},{"MediaId":"****4d7cf14dc7b83b0e801c****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @example {"NotifyAddress":"http://xx.xx.xxx","Key":"Valuexxx"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'exportType'        => 'ExportType',
        'outputMediaConfig' => 'OutputMediaConfig',
        'projectId'         => 'ProjectId',
        'timeline'          => 'Timeline',
        'userData'          => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitProjectExportJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
