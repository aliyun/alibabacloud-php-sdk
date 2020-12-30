<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePolicyBasedRoutingsResponseBody\policyBasedRoutings;

use AlibabaCloud\Tea\Model;

class policyBasedRouting extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $pbrInstanceId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'   => 'Description',
        'pbrInstanceId' => 'PbrInstanceId',
        'priority'      => 'Priority',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pbrInstanceId) {
            $res['PbrInstanceId'] = $this->pbrInstanceId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyBasedRouting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PbrInstanceId'])) {
            $model->pbrInstanceId = $map['PbrInstanceId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
