<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\UpdateBatchRequest;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @description The name of the template.
     *
     * @example doc/convert
     *
     * @var string
     */
    public $name;

    /**
     * @description The template parameters.
     *
     * @var string[]
     */
    public $parameters;
    protected $_name = [
        'name'       => 'Name',
        'parameters' => 'Parameters',
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
