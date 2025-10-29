<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class PutRecordStorageLifeCycleRequest extends Model
{
    /**
     * @var string[]
     */
    public $streamIds;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $unixTimestamp;
    protected $_name = [
        'streamIds' => 'StreamIds',
        'tag' => 'Tag',
        'unixTimestamp' => 'UnixTimestamp',
    ];

    public function validate()
    {
        if (\is_array($this->streamIds)) {
            Model::validateArray($this->streamIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamIds) {
            if (\is_array($this->streamIds)) {
                $res['StreamIds'] = [];
                $n1 = 0;
                foreach ($this->streamIds as $item1) {
                    $res['StreamIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->unixTimestamp) {
            $res['UnixTimestamp'] = $this->unixTimestamp;
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
        if (isset($map['StreamIds'])) {
            if (!empty($map['StreamIds'])) {
                $model->streamIds = [];
                $n1 = 0;
                foreach ($map['StreamIds'] as $item1) {
                    $model->streamIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['UnixTimestamp'])) {
            $model->unixTimestamp = $map['UnixTimestamp'];
        }

        return $model;
    }
}
