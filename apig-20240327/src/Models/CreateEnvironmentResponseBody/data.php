<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Environment ID.
     *
     * @example env-cq7l5s5lhtgi6qasrdc0
     *
     * @var string
     */
    public $environmentId;
    protected $_name = [
        'environmentId' => 'environmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        return $model;
    }
}
