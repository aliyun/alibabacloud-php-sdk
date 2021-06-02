<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetUserBucketConfigResponseBody;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetUserBucketConfigResponseBody\config\input;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetUserBucketConfigResponseBody\config\output;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var input
     */
    public $input;

    /**
     * @var output
     */
    public $output;
    protected $_name = [
        'input'  => 'Input',
        'output' => 'Output',
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
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        return $model;
    }
}
