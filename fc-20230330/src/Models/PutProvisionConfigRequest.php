<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PutProvisionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var PutProvisionConfigInput
     */
    public $request;
    protected $_name = [
        'qualifier' => 'qualifier',
        'request'   => 'request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutProvisionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['request'])) {
            $model->request = PutProvisionConfigInput::fromMap($map['request']);
        }

        return $model;
    }
}
