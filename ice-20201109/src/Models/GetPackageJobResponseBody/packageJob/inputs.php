<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody\packageJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody\packageJob\inputs\input;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'input' => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
