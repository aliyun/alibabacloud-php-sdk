<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class outputList extends Model
{
    /**
     * @var string
     */
    public $refTableName;

    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'refTableName' => 'RefTableName',
        'output'       => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refTableName) {
            $res['RefTableName'] = $this->refTableName;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefTableName'])) {
            $model->refTableName = $map['RefTableName'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
