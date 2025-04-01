<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateGreyTagRouteRequest extends Model
{
    /**
     * @var string
     */
    public $albRules;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dubboRules;

    /**
     * @var int
     */
    public $greyTagRouteId;

    /**
     * @var string
     */
    public $scRules;
    protected $_name = [
        'albRules' => 'AlbRules',
        'description' => 'Description',
        'dubboRules' => 'DubboRules',
        'greyTagRouteId' => 'GreyTagRouteId',
        'scRules' => 'ScRules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albRules) {
            $res['AlbRules'] = $this->albRules;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dubboRules) {
            $res['DubboRules'] = $this->dubboRules;
        }

        if (null !== $this->greyTagRouteId) {
            $res['GreyTagRouteId'] = $this->greyTagRouteId;
        }

        if (null !== $this->scRules) {
            $res['ScRules'] = $this->scRules;
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
        if (isset($map['AlbRules'])) {
            $model->albRules = $map['AlbRules'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DubboRules'])) {
            $model->dubboRules = $map['DubboRules'];
        }

        if (isset($map['GreyTagRouteId'])) {
            $model->greyTagRouteId = $map['GreyTagRouteId'];
        }

        if (isset($map['ScRules'])) {
            $model->scRules = $map['ScRules'];
        }

        return $model;
    }
}
