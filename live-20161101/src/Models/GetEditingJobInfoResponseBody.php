<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class GetEditingJobInfoResponseBody extends Model
{
    /**
     * @description The ID of the production studio.
     *
     * @example 53200b81-b761-4c10-842a-a0726d97****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The information about editing tasks. The following fields are returned for each editing task:
     *
     *   **OutputVodId**: the ID of the output video-on-demand (VOD) file.
     *   **TaskStatus**: the status of the editing task. Valid values: -1, 0, 1, 2, and 3. A value of -1 indicates that the editing task fails. A value of 0 indicates that the editing task is being initialized. A value of 1 indicates that editing is in progress. A value of 2 indicates that the output VOD file is being uploaded. A value of 3 indicates that the editing task is successful.
     *   **StorageLocation**: the storage location in ApsaraVideo VOD.
     *   **FileName**: the name of the file that is edited.
     *   **ShowId**: the ID of the episode.
     *
     * @example "EditingTasksInfo": {     "OutputVodId": "3e34733b40b9a96ccf5c1ff6f69****",     "TaskStatus": 1,     "StorageInfo": {       "StorageLocation": "***bucket***",       "FileName": "EditFile****"     },     "ShowId": "42200b81-b761-4c10-842a-a0726d97****"   },
     *
     * @var string
     */
    public $editingTasksInfo;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'casterId' => 'CasterId',
        'editingTasksInfo' => 'EditingTasksInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->editingTasksInfo) {
            $res['EditingTasksInfo'] = $this->editingTasksInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEditingJobInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['EditingTasksInfo'])) {
            $model->editingTasksInfo = $map['EditingTasksInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
