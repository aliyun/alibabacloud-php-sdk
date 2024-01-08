<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetProjectRequest extends Model
{
    /**
     * @description Specifies whether to use additional information.
     *
     * @example true
     *
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'verbose' => 'verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verbose) {
            $res['verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['verbose'])) {
            $model->verbose = $map['verbose'];
        }

        return $model;
    }
}
