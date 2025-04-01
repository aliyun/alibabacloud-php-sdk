<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DeleteGreyTagRouteRequest extends Model
{
    /**
     * @var int
     */
    public $greyTagRouteId;
    protected $_name = [
        'greyTagRouteId' => 'GreyTagRouteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->greyTagRouteId) {
            $res['GreyTagRouteId'] = $this->greyTagRouteId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GreyTagRouteId'])) {
            $model->greyTagRouteId = $map['GreyTagRouteId'];
        }

        return $model;
    }
}
