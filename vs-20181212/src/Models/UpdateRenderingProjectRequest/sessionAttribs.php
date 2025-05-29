<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingProjectRequest;

use AlibabaCloud\Dara\Model;

class sessionAttribs extends Model
{
    /**
     * @var string
     */
    public $startMode;
    protected $_name = [
        'startMode' => 'StartMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->startMode) {
            $res['StartMode'] = $this->startMode;
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
        if (isset($map['StartMode'])) {
            $model->startMode = $map['StartMode'];
        }

        return $model;
    }
}
