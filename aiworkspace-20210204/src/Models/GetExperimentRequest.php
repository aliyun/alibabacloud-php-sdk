<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
