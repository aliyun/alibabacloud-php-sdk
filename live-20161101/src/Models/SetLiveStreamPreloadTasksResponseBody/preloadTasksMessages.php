<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody\preloadTasksMessages\preloadTasksMessage;

class preloadTasksMessages extends Model
{
    /**
     * @var preloadTasksMessage[]
     */
    public $preloadTasksMessage;
    protected $_name = [
        'preloadTasksMessage' => 'PreloadTasksMessage',
    ];

    public function validate()
    {
        if (\is_array($this->preloadTasksMessage)) {
            Model::validateArray($this->preloadTasksMessage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preloadTasksMessage) {
            if (\is_array($this->preloadTasksMessage)) {
                $res['PreloadTasksMessage'] = [];
                $n1 = 0;
                foreach ($this->preloadTasksMessage as $item1) {
                    $res['PreloadTasksMessage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreloadTasksMessage'])) {
            if (!empty($map['PreloadTasksMessage'])) {
                $model->preloadTasksMessage = [];
                $n1 = 0;
                foreach ($map['PreloadTasksMessage'] as $item1) {
                    $model->preloadTasksMessage[$n1] = preloadTasksMessage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
