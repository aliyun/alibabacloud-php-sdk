<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class hibernationOptions extends Model
{
    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example false
     *
     * @var bool
     */
    public $configured;
    protected $_name = [
        'configured' => 'Configured',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hibernationOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }

        return $model;
    }
}
