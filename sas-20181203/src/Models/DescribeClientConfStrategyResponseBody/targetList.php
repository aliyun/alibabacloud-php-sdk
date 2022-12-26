<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @example 2b1753a6-04d9-448e-ad17-7abdf19f****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
