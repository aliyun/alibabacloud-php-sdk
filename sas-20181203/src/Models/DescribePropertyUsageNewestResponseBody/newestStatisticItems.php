<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponseBody;

use AlibabaCloud\Dara\Model;

class newestStatisticItems extends Model
{
    /**
     * @var int
     */
    public $create;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'create' => 'Create',
        'name'   => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
