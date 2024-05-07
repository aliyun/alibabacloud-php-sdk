<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description ID
     *
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $id;

    /**
     * @example runnable
     *
     * @var string
     */
    public $status;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.meta?expire=2010323&sign=sf2324
     *
     * @var string
     */
    public $videoMetaUrl;

    /**
     * @example http://oss.aliyuncs.com/1.mp4?expire=2010323&sign=sf2324
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'createdAt'    => 'CreatedAt',
        'id'           => 'Id',
        'status'       => 'Status',
        'videoMetaUrl' => 'VideoMetaUrl',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoMetaUrl) {
            $res['VideoMetaUrl'] = $this->videoMetaUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoMetaUrl'])) {
            $model->videoMetaUrl = $map['VideoMetaUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
