<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policy;

use AlibabaCloud\Tea\Model;

class statement extends Model
{
    /**
     * @description The operations that are performed on the specified resource.
     *
     * @var string[]
     */
    public $action;

    /**
     * @description The effect of the statement. Valid values:
     *
     *   Allow
     *   Deny
     *
     * @example Allow
     *
     * @var string
     */
    public $effect;

    /**
     * @description The object that the statement covers. An asterisk (\*) indicates all resources.
     *
     * @example *
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'action'   => 'Action',
        'effect'   => 'Effect',
        'resource' => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = $map['Action'];
            }
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        return $model;
    }
}
