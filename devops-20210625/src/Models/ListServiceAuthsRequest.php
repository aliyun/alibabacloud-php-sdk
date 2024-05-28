<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListServiceAuthsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example RAM
     *
     * @var string
     */
    public $serviceAuthType;
    protected $_name = [
        'serviceAuthType' => 'serviceAuthType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceAuthType) {
            $res['serviceAuthType'] = $this->serviceAuthType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceAuthsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceAuthType'])) {
            $model->serviceAuthType = $map['serviceAuthType'];
        }

        return $model;
    }
}
