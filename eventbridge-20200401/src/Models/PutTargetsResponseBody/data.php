<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsResponseBody\data\errorEntries;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the failed event target.
     *
     * @var errorEntries[]
     */
    public $errorEntries;

    /**
     * @description The number of failed event targets. Valid values:
     *
     *   0: All event targets succeeded.
     *   An integer other than 0: indicates the number of failed event targets.
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
