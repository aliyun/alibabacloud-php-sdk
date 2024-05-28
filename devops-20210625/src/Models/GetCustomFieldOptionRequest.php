<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetCustomFieldOptionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description This parameter is required.
     *
     * @example Project
     *
     * @var string
     */
    public $spaceType;

    /**
     * @description This parameter is required.
     *
     * @example 9uyxxxx1re573f561dxxxxx
     *
     * @var string
     */
    public $workitemTypeIdentifier;
    protected $_name = [
        'spaceIdentifier'        => 'spaceIdentifier',
        'spaceType'              => 'spaceType',
        'workitemTypeIdentifier' => 'workitemTypeIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }
        if (null !== $this->workitemTypeIdentifier) {
            $res['workitemTypeIdentifier'] = $this->workitemTypeIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCustomFieldOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }
        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}
