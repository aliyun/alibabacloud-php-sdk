<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\Tea\Model;

class detailedStatus extends Model
{
    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var int
     */
    public $diffOffset;

    /**
     * @var mixed[]
     */
    public $extensions;

    /**
     * @var float
     */
    public $TPS;
    protected $_name = [
        'delayTime'  => 'DelayTime',
        'diffOffset' => 'DiffOffset',
        'extensions' => 'Extensions',
        'TPS'        => 'TPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->diffOffset) {
            $res['DiffOffset'] = $this->diffOffset;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->TPS) {
            $res['TPS'] = $this->TPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailedStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['DiffOffset'])) {
            $model->diffOffset = $map['DiffOffset'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['TPS'])) {
            $model->TPS = $map['TPS'];
        }

        return $model;
    }
}
