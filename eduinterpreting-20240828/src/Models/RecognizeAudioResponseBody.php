<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduInterpreting\V20240828\Models;

use AlibabaCloud\SDK\EduInterpreting\V20240828\Models\RecognizeAudioResponseBody\itemList;
use AlibabaCloud\Tea\Model;

class RecognizeAudioResponseBody extends Model
{
    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @example 38CD0881-BC7B-5ADB-A3EB-FF813927D09A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3ab5c082-2c0e-4f39-b12f-057dd5e373ff
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'itemList'  => 'ItemList',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemList) {
            $res['ItemList'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['ItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeAudioResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n               = 0;
                foreach ($map['ItemList'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
