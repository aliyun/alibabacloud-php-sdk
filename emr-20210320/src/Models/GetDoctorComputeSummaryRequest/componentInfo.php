<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryRequest;

use AlibabaCloud\Tea\Model;

class componentInfo extends Model
{
    /**
     * @example MAPREDUCE
     *
     * @var string
     */
    public $componentName;

    /**
     * @example engine
     *
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentName' => 'ComponentName',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}
