<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsResponseBody\data\errorEntries;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the event body that failed to be processed.
     *
     * @var errorEntries[]
     */
    public $errorEntries;

    /**
     * @description The number of event bodies that failed to be processed. Valid values: 0: No event bodies failed to be processed. An integer other than 0: the number of event bodies that failed to be processed.
     *
     * @example 0
     *
     * @var int
     */
    public $errorEntriesCount;
    protected $_name = [
        'errorEntries'      => 'ErrorEntries',
        'errorEntriesCount' => 'ErrorEntriesCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorEntries) {
            $res['ErrorEntries'] = [];
            if (null !== $this->errorEntries && \is_array($this->errorEntries)) {
                $n = 0;
                foreach ($this->errorEntries as $item) {
                    $res['ErrorEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorEntriesCount) {
            $res['ErrorEntriesCount'] = $this->errorEntriesCount;
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
        if (isset($map['ErrorEntries'])) {
            if (!empty($map['ErrorEntries'])) {
                $model->errorEntries = [];
                $n                   = 0;
                foreach ($map['ErrorEntries'] as $item) {
                    $model->errorEntries[$n++] = null !== $item ? errorEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorEntriesCount'])) {
            $model->errorEntriesCount = $map['ErrorEntriesCount'];
        }

        return $model;
    }
}
