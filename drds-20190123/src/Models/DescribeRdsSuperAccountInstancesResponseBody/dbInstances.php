<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class dbInstances extends Model
{
    /**
     * @var string[]
     */
    public $dbInstance;
    protected $_name = [
        'dbInstance' => 'DbInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = $this->dbInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstance'])) {
            if (!empty($map['DbInstance'])) {
                $model->dbInstance = $map['DbInstance'];
            }
        }

        return $model;
    }
}
