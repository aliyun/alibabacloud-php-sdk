<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceNameList extends Model
{
    /**
     * @var string[]
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            if (!empty($map['InstanceName'])) {
                $model->instanceName = $map['InstanceName'];
            }
        }

        return $model;
    }
}
