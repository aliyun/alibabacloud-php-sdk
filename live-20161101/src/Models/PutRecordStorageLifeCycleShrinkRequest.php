<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class PutRecordStorageLifeCycleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $streamIdsShrink;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $unixTimestamp;
    protected $_name = [
        'streamIdsShrink' => 'StreamIds',
        'tag' => 'Tag',
        'unixTimestamp' => 'UnixTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamIdsShrink) {
            $res['StreamIds'] = $this->streamIdsShrink;
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
            $model->streamIdsShrink = $map['StreamIds'];
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
