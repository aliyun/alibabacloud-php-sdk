<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration;

use AlibabaCloud\Dara\Model;

class outputList extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $refTableName;
    protected $_name = [
        'output' => 'Output',
        'refTableName' => 'RefTableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->refTableName) {
            $res['RefTableName'] = $this->refTableName;
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
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['RefTableName'])) {
            $model->refTableName = $map['RefTableName'];
        }

        return $model;
    }
}
