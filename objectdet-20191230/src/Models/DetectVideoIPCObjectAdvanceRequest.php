<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class DetectVideoIPCObjectAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $callbackOnlyHasObject;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'callbackOnlyHasObject' => 'CallbackOnlyHasObject',
        'startTimestamp' => 'StartTimestamp',
        'videoURLObject' => 'VideoURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackOnlyHasObject) {
            $res['CallbackOnlyHasObject'] = $this->callbackOnlyHasObject;
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
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
        if (isset($map['CallbackOnlyHasObject'])) {
            $model->callbackOnlyHasObject = $map['CallbackOnlyHasObject'];
        }

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
