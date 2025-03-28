<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponseBody\configuration;

use AlibabaCloud\Tea\Model;

class grayVersions extends Model
{
    /**
     * @description Gray version name
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority of the current gray rule.
     *
     * @example 20
     *
     * @var int
     */
    public $priority;

    /**
     * @description Rules of the current gray version
     *
     * @example a=b
     *
     * @var string
     */
    public $rule;

    /**
     * @description Gray type
     *
     * @example Beta
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'priority' => 'Priority',
        'rule' => 'Rule',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grayVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
