<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeleteGreyTagRouteRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var int
     */
    public $greyTagRouteId;
    protected $_name = [
        'greyTagRouteId' => 'GreyTagRouteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->greyTagRouteId) {
            $res['GreyTagRouteId'] = $this->greyTagRouteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGreyTagRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GreyTagRouteId'])) {
            $model->greyTagRouteId = $map['GreyTagRouteId'];
        }

        return $model;
    }
}
