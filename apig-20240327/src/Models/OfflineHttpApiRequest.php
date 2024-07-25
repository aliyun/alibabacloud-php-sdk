<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class OfflineHttpApiRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example env-xxx
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
     * @return OfflineHttpApiRequest
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
