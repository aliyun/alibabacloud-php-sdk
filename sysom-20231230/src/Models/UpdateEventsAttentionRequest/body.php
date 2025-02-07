<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var int
     */
    public $mode;
    /**
     * @var string
     */
    public $range;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'mode'  => 'mode',
        'range' => 'range',
        'uuid'  => 'uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->range) {
            $res['range'] = $this->range;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['range'])) {
            $model->range = $map['range'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
