<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data\resourceList;

use AlibabaCloud\Tea\Model;

class operation extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $operations;
    protected $_name = [
        'name'       => 'Name',
        'operations' => 'Operations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operations) {
            $res['Operations'] = $this->operations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operations'])) {
            $model->operations = $map['Operations'];
        }

        return $model;
    }
}
