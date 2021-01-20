<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessRequest;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'value'    => 'Value',
        'function' => 'Function',
        'name'     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchExpress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
