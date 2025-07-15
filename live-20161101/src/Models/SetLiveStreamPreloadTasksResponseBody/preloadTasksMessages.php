<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody\preloadTasksMessages\preloadTasksMessage;
use AlibabaCloud\Tea\Model;

class preloadTasksMessages extends Model
{
    /**
     * @var preloadTasksMessage[]
     */
    public $preloadTasksMessage;
    protected $_name = [
        'preloadTasksMessage' => 'PreloadTasksMessage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preloadTasksMessage) {
            $res['PreloadTasksMessage'] = [];
            if (null !== $this->preloadTasksMessage && \is_array($this->preloadTasksMessage)) {
                $n = 0;
                foreach ($this->preloadTasksMessage as $item) {
                    $res['PreloadTasksMessage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preloadTasksMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreloadTasksMessage'])) {
            if (!empty($map['PreloadTasksMessage'])) {
                $model->preloadTasksMessage = [];
                $n = 0;
                foreach ($map['PreloadTasksMessage'] as $item) {
                    $model->preloadTasksMessage[$n++] = null !== $item ? preloadTasksMessage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
