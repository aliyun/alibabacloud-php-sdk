<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The parameter name of the filter. You can specify one or more filters. Valid values:
     *
     *   StartTime: the start time of the log event.
     *   EndTime: the end time of the ActionTrail event.
     *   EventName: the name of the ActionTrail event.
     *   ResourceName: the name of the ActionTrail resource.
     *   ApplicationGroupName: the name of the application group.
     *
     * @example - StartTime
     * - ApplicationGroupName
     * @var string
     */
    public $name;

    /**
     * @description The parameter value N of the filter. Valid values of N: 1 to 10.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
