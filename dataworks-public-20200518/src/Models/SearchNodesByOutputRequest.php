<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SearchNodesByOutputRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aaaaa.1231412_out,bbbb.12313123_out
     *
     * @var string
     */
    public $outputs;

    /**
     * @description This parameter is required.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'outputs'    => 'Outputs',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchNodesByOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
