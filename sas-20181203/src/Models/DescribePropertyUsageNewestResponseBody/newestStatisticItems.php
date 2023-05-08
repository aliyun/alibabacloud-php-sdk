<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponseBody;

use AlibabaCloud\Tea\Model;

class newestStatisticItems extends Model
{
    /**
     * @example 1566178646000
     *
     * @var int
     */
    public $create;

    /**
     * @example root
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'create' => 'Create',
        'name'   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return newestStatisticItems
     */
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
