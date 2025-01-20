<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponseBody\configuration;

use AlibabaCloud\Dara\Model;

class grayVersions extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $rule;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name'     => 'Name',
        'priority' => 'Priority',
        'rule'     => 'Rule',
        'type'     => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
