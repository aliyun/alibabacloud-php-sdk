<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\FastFailPolicy;
use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var FastFailPolicy
     */
    public $fastFailPolicy;

    /**
     * @description This parameter is required.
     *
     * @example doc/convert
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;
    protected $_name = [
        'fastFailPolicy' => 'FastFailPolicy',
        'name'           => 'Name',
        'parameters'     => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fastFailPolicy) {
            $res['FastFailPolicy'] = null !== $this->fastFailPolicy ? $this->fastFailPolicy->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FastFailPolicy'])) {
            $model->fastFailPolicy = FastFailPolicy::fromMap($map['FastFailPolicy']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }

        return $model;
    }
}
