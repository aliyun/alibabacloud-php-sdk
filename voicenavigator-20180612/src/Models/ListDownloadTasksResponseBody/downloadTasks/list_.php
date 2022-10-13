<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListDownloadTasksResponseBody\downloadTasks;

use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListDownloadTasksResponseBody\downloadTasks\list_\downloadTaskFiles;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var downloadTaskFiles[]
     */
    public $downloadTaskFiles;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'downloadTaskFiles' => 'DownloadTaskFiles',
        'expireTime'        => 'ExpireTime',
        'status'            => 'Status',
        'taskId'            => 'TaskId',
        'title'             => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadTaskFiles) {
            $res['DownloadTaskFiles'] = [];
            if (null !== $this->downloadTaskFiles && \is_array($this->downloadTaskFiles)) {
                $n = 0;
                foreach ($this->downloadTaskFiles as $item) {
                    $res['DownloadTaskFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadTaskFiles'])) {
            if (!empty($map['DownloadTaskFiles'])) {
                $model->downloadTaskFiles = [];
                $n                        = 0;
                foreach ($map['DownloadTaskFiles'] as $item) {
                    $model->downloadTaskFiles[$n++] = null !== $item ? downloadTaskFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
