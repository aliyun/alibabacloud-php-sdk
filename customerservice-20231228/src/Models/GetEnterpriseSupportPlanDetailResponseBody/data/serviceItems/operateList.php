<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\serviceItems;

use AlibabaCloud\Tea\Model;

class operateList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $name1;
    protected $_name = [
        'name'  => 'name',
        'name1' => 'name1',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->name1) {
            $res['name1'] = $this->name1;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['name1'])) {
            $model->name1 = $map['name1'];
        }

        return $model;
    }
}
