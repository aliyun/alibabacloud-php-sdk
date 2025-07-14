<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationNlbsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DataInstancesValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the instance.
     *
     * @var DataInstancesValue[]
     */
    public $instances;
    protected $_name = [
        'instances' => 'Instances',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                foreach ($this->instances as $key => $val) {
                    $res['Instances'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }

        return $model;
    }
}
