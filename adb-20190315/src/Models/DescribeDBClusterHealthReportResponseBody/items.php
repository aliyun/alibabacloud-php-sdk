<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthReportResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $max;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $avg;
    protected $_name = [
        'key'  => 'Key',
        'max'  => 'Max',
        'name' => 'Name',
        'avg'  => 'Avg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->avg) {
            $res['Avg'] = $this->avg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Avg'])) {
            $model->avg = $map['Avg'];
        }

        return $model;
    }
}
