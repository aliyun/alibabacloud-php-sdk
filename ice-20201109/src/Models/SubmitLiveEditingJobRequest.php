<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveEditingJobRequest extends Model
{
    /**
     * @description The clips in the JSON array format. The output video is created by merging these clips sequentially.
     *
     * This parameter is required.
     * @example [{\\"StartTime\\": \\" 2021-06-21T08:01:00Z\\",  \\"EndTime\\": \\" 2021-06-21T08:03:00Z\\" ,  "AppName": "app", "DomainName": "domain.com", "StreamName": "stream"},  {\\"StartTime\\": \\" 2021-06-21T08:05:00Z\\",  \\"EndTime\\": \\" 2021-06-21T08:09:00Z\\" }]
     *
     * @var string
     */
    public $clips;

    /**
     * @description The live stream configurations, in the JSON format. The configurations must include the following parameters:
     *
     *   AppName: the name of the application to which the live stream belongs.
     *   DomainName: the domain name of the application.
     *   StreamName: the name of the live stream.
     *
     * @example { "AppName": "app", "DomainName": "domain.com", "StreamName": "stream"  }
     *
     * @var string
     */
    public $liveStreamConfig;

    /**
     * @description The production configurations, in the JSON format. Mode specifies the editing mode. Valid values:
     *
     *   **AccurateFast** (default): fast editing. It is faster than the Accurate mode. The resolution of the output file is the same as that of the source stream. You cannot specify the width and height of the output file.
     *   **Accurate**: accurate editing. In this mode, you can specify the width and height of the output file.
     *   **Rough**: rough editing. The minimum precision is one TS segment. The output file comprises all segments within the specified time range. You can specify the width and height of the output file.
     *   **RoughFast**: fast rough editing. It is faster than the Accurate mode. The minimum precision is one TS segment. The output file comprises all segments within the specified time range. The resolution of the output file is the same as that of the source stream. You cannot specify the width and height of the output file.
     *
     * @example { "Mode": "AccurateFast"}
     *
     * @var string
     */
    public $mediaProduceConfig;

    /**
     * @description The configurations of the output file, in the JSON format. You can specify an OSS URL or a storage location in a storage bucket of ApsaraVideo VOD.
     *
     *   To store the output file in OSS, you must specify MediaURL.
     *   To store the output file in ApsaraVideo VOD, you must specify StorageLocation and FileName.
     *
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @description The type of the output file. Valid values:
     *
     *   oss-object: OSS object in an OSS bucket.
     *   vod-media: media asset in Alibaba Cloud VOD.
     *
     * @example oss-object
     *
     * @var string
     */
    public $outputMediaTarget;

    /**
     * @description The ID of the live editing project. If this parameter is specified, the system reads the storage configurations of the project. If this parameter is not specified, the specified storage configurations take precedence.
     *
     * @example ****fddd7748b58bf1d47e95****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The user-defined data in the JSON format, which can be up to 512 bytes in length.
     *
     * @example {"key": "value"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clips'              => 'Clips',
        'liveStreamConfig'   => 'LiveStreamConfig',
        'mediaProduceConfig' => 'MediaProduceConfig',
        'outputMediaConfig'  => 'OutputMediaConfig',
        'outputMediaTarget'  => 'OutputMediaTarget',
        'projectId'          => 'ProjectId',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clips) {
            $res['Clips'] = $this->clips;
        }
        if (null !== $this->liveStreamConfig) {
            $res['LiveStreamConfig'] = $this->liveStreamConfig;
        }
        if (null !== $this->mediaProduceConfig) {
            $res['MediaProduceConfig'] = $this->mediaProduceConfig;
        }
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLiveEditingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clips'])) {
            $model->clips = $map['Clips'];
        }
        if (isset($map['LiveStreamConfig'])) {
            $model->liveStreamConfig = $map['LiveStreamConfig'];
        }
        if (isset($map['MediaProduceConfig'])) {
            $model->mediaProduceConfig = $map['MediaProduceConfig'];
        }
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
