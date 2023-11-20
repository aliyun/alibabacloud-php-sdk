<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\OperatorNode;

use AlibabaCloud\Tea\Model;

class stats extends Model
{
    /**
     * @var int
     */
    public $bytes;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'bytes'      => 'bytes',
        'outputRows' => 'outputRows',
        'parameters' => 'parameters',
        'peakMemory' => 'peakMemory',
        'timeCost'   => 'timeCost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytes) {
            $res['bytes'] = $this->bytes;
        }
        if (null !== $this->outputRows) {
            $res['outputRows'] = $this->outputRows;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->peakMemory) {
            $res['peakMemory'] = $this->peakMemory;
        }
        if (null !== $this->timeCost) {
            $res['timeCost'] = $this->timeCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bytes'])) {
            $model->bytes = $map['bytes'];
        }
        if (isset($map['outputRows'])) {
            $model->outputRows = $map['outputRows'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['peakMemory'])) {
            $model->peakMemory = $map['peakMemory'];
        }
        if (isset($map['timeCost'])) {
            $model->timeCost = $map['timeCost'];
        }

        return $model;
    }
}
