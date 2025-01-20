<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\arrivalStop\exit_;

class arrivalStop extends Model
{
    /**
     * @var exit_
     */
    public $exit;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'exit'     => 'exit',
        'id'       => 'id',
        'location' => 'location',
        'name'     => 'name',
    ];

    public function validate()
    {
        if (null !== $this->exit) {
            $this->exit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exit) {
            $res['exit'] = null !== $this->exit ? $this->exit->toArray($noStream) : $this->exit;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['exit'])) {
            $model->exit = exit_::fromMap($map['exit']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
