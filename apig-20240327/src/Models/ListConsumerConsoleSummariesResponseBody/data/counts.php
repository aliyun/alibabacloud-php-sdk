<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data;

use AlibabaCloud\Dara\Model;

class counts extends Model
{
    /**
     * @var int
     */
    public $all;

    /**
     * @var int
     */
    public $disabled;

    /**
     * @var int
     */
    public $granted;

    /**
     * @var int
     */
    public $groups;
    protected $_name = [
        'all' => 'all',
        'disabled' => 'disabled',
        'granted' => 'granted',
        'groups' => 'groups',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }

        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        if (null !== $this->granted) {
            $res['granted'] = $this->granted;
        }

        if (null !== $this->groups) {
            $res['groups'] = $this->groups;
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }

        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        if (isset($map['granted'])) {
            $model->granted = $map['granted'];
        }

        if (isset($map['groups'])) {
            $model->groups = $map['groups'];
        }

        return $model;
    }
}
