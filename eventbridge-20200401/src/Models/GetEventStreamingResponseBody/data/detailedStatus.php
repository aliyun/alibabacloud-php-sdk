<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->extensions)) {
            Model::validateArray($this->extensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        if (null !== $this->diffOffset) {
            $res['DiffOffset'] = $this->diffOffset;
        }

        if (null !== $this->extensions) {
            if (\is_array($this->extensions)) {
                $res['Extensions'] = [];
                foreach ($this->extensions as $key1 => $value1) {
                    $res['Extensions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->TPS) {
            $res['TPS'] = $this->TPS;
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
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        if (isset($map['DiffOffset'])) {
            $model->diffOffset = $map['DiffOffset'];
        }

        if (isset($map['Extensions'])) {
            if (!empty($map['Extensions'])) {
                $model->extensions = [];
                foreach ($map['Extensions'] as $key1 => $value1) {
                    $model->extensions[$key1] = $value1;
                }
            }
        }

        if (isset($map['TPS'])) {
            $model->TPS = $map['TPS'];
        }

        return $model;
    }
}
