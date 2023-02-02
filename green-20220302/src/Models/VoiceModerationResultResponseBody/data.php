<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponseBody\data\sliceDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example liveId
     *
     * @var string
     */
    public $liveId;

    /**
     * @var sliceDetails[]
     */
    public $sliceDetails;

    /**
     * @example kw24ihd0WGkdi5nniVZM@qOj-1x5Ibb
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'liveId'       => 'LiveId',
        'sliceDetails' => 'SliceDetails',
        'taskId'       => 'TaskId',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->sliceDetails) {
            $res['SliceDetails'] = [];
            if (null !== $this->sliceDetails && \is_array($this->sliceDetails)) {
                $n = 0;
                foreach ($this->sliceDetails as $item) {
                    $res['SliceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['SliceDetails'])) {
            if (!empty($map['SliceDetails'])) {
                $model->sliceDetails = [];
                $n                   = 0;
                foreach ($map['SliceDetails'] as $item) {
                    $model->sliceDetails[$n++] = null !== $item ? sliceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
