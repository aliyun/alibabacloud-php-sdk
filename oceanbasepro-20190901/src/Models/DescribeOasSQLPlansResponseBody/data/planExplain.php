<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data;

use AlibabaCloud\Tea\Model;

class planExplain extends Model
{
    /**
     * @description JSON string of the SQL execution plan.
     *
     * @example {\\"RootOperations\\":[{\\"Children\\
     *
     * @var string
     */
    public $planJsonString;
    protected $_name = [
        'planJsonString' => 'PlanJsonString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planJsonString) {
            $res['PlanJsonString'] = $this->planJsonString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planExplain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanJsonString'])) {
            $model->planJsonString = $map['PlanJsonString'];
        }

        return $model;
    }
}
