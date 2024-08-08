<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class GetAutofeExperimentResponseBody extends Model
{
    /**
     * @example INVALID_USER_OR_EXP
     *
     * @var string
     */
    public $code;

    /**
     * @example 266977839132045194
     *
     * @var string
     */
    public $creator;

    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @example tfKs0Ds
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example 2023-08-18T09:41:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-11-30T02:05:34.000Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example {"action": "fs_train", "request_id": "6B6D4FB6-87AA-5C0E-94AB-E0F830955D1E", "job_num": 7, "job_runs": [{"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-fqlk86bvk68", "duration": 181, "finish_at": 1719158854000, "create_time": "2024-06-23T16:04:31.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-q18k5jo66h3k", "duration": 233, "finish_at": 1719159106000, "create_time": "2024-06-23T16:07:51.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-g7b38dmqes0nm4le", "duration": 173, "finish_at": 1719159306000, "create_time": "2024-06-23T16:12:12.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-524dab97aazs3jmc", "duration": 199, "finish_at": 1719159527000, "create_time": "2024-06-23T16:15:28.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-a8z56wy2ppwmxx04", "duration": 197, "finish_at": 1719159747000, "create_time": "2024-06-23T16:19:08.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-2cgsbxzzzma1j", "duration": 210, "finish_at": 1719159982000, "create_time": "2024-06-23T16:22:51.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-3cgsvf3ien1cw7", "duration": 184, "finish_at": 1719160188000, "create_time": "2024-06-23T16:26:43.000Z", "status": "Succeeded"}], "workspace_id": "86006"}{"action": "fs_train", "request_id": "6B6D4FB6-87AA-5C0E-94AB-E0F830955D1E", "job_num": 7, "job_runs": [{"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-fqlk86betchc69vk68", "duration": 181, "finish_at": 1719158854000, "create_time": "2024-06-23T16:04:31.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-q18ijqak558jo66h3k", "duration": 233, "finish_at": 1719159106000, "create_time": "2024-06-23T16:07:51.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-g7b38df7mqes0nm4le", "duration": 173, "finish_at": 1719159306000, "create_time": "2024-06-23T16:12:12.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-524zedab97aazs3jmc", "duration": 199, "finish_at": 1719159527000, "create_time": "2024-06-23T16:15:28.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-a8z56wy2ppm6wmxx04", "duration": 197, "finish_at": 1719159747000, "create_time": "2024-06-23T16:19:08.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-2cgsbxzx9i35zzma1j", "duration": 210, "finish_at": 1719159982000, "create_time": "2024-06-23T16:22:51.000Z", "status": "Succeeded"}, {"job_url": "https://pai.console.aliyun.com/?projectId=&regionId=cn-beijing#/studio/task/detail/flow-3cgsvf3bprlien1cw7", "duration": 184, "finish_at": 1719160188000, "create_time": "2024-06-23T16:26:43.000Z", "status": "Succeeded"}], "workspace_id": "86006"}
     *
     * @var string
     */
    public $jobMeta;

    /**
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 071A904D-5A49-597F-9F69-81C7701D04AC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example age,sex,education
     *
     * @var string
     */
    public $selectedFeatures;

    /**
     * @example FINISHED, FAILED, USER_CANCELED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'             => 'Code',
        'creator'          => 'Creator',
        'detail'           => 'Detail',
        'experimentId'     => 'ExperimentId',
        'gmtCreateTime'    => 'GmtCreateTime',
        'gmtModifiedTime'  => 'GmtModifiedTime',
        'jobMeta'          => 'JobMeta',
        'message'          => 'Message',
        'name'             => 'Name',
        'requestId'        => 'RequestId',
        'selectedFeatures' => 'SelectedFeatures',
        'status'           => 'Status',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->jobMeta) {
            $res['JobMeta'] = $this->jobMeta;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->selectedFeatures) {
            $res['SelectedFeatures'] = $this->selectedFeatures;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutofeExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['JobMeta'])) {
            $model->jobMeta = $map['JobMeta'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SelectedFeatures'])) {
            $model->selectedFeatures = $map['SelectedFeatures'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
