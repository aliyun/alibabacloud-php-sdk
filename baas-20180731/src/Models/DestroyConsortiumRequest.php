<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DestroyConsortiumRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $consortiumId;
    protected $_name = [
        'consortiumId' => 'ConsortiumId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DestroyConsortiumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }

        return $model;
    }
}
