<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDagsRequest extends Model
{
    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. PROD indicates the production environment. DEV indicates the development environment.
     *
     * @example 123
     *
     * @var int
     */
    public $opSeq;

    /**
     * @description The HTTP status code returned.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'opSeq'      => 'OpSeq',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opSeq) {
            $res['OpSeq'] = $this->opSeq;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpSeq'])) {
            $model->opSeq = $map['OpSeq'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
