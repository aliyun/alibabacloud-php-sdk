<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DeleteAntChainConsortiumRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example q0oWq92P
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
     * @return DeleteAntChainConsortiumRequest
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
