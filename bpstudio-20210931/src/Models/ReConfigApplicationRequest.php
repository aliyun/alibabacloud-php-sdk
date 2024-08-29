<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ReConfigApplicationRequest extends Model
{
    /**
     * @example Q2P4O9YSOKCT35L9
     *
     * @var string
     */
    public $appId;

    /**
     * @example {"${instance_type}":"ecs.c6.3xlarge"}
     *
     * @var string
     */
    public $variables;
    protected $_name = [
        'appId'     => 'AppId',
        'variables' => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReConfigApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
