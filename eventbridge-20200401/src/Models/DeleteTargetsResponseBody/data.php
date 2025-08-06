<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsResponseBody\data\errorEntries;

class data extends Model
{
    /**
     * @var errorEntries[]
     */
    public $errorEntries;

    /**
     * @var int
     */
    public $errorEntriesCount;
    protected $_name = [
        'errorEntries' => 'ErrorEntries',
        'errorEntriesCount' => 'ErrorEntriesCount',
    ];

    public function validate()
    {
        if (\is_array($this->errorEntries)) {
            Model::validateArray($this->errorEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorEntries) {
            if (\is_array($this->errorEntries)) {
                $res['ErrorEntries'] = [];
                $n1 = 0;
                foreach ($this->errorEntries as $item1) {
                    $res['ErrorEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorEntriesCount) {
            $res['ErrorEntriesCount'] = $this->errorEntriesCount;
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
        if (isset($map['ErrorEntries'])) {
            if (!empty($map['ErrorEntries'])) {
                $model->errorEntries = [];
                $n1 = 0;
                foreach ($map['ErrorEntries'] as $item1) {
                    $model->errorEntries[$n1] = errorEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorEntriesCount'])) {
            $model->errorEntriesCount = $map['ErrorEntriesCount'];
        }

        return $model;
    }
}
