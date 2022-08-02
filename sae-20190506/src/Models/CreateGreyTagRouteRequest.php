<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateGreyTagRouteRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dubboRules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scRules;
    protected $_name = [
        'appId'       => 'AppId',
        'description' => 'Description',
        'dubboRules'  => 'DubboRules',
        'name'        => 'Name',
        'scRules'     => 'ScRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dubboRules) {
            $res['DubboRules'] = $this->dubboRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scRules) {
            $res['ScRules'] = $this->scRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGreyTagRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DubboRules'])) {
            $model->dubboRules = $map['DubboRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScRules'])) {
            $model->scRules = $map['ScRules'];
        }

        return $model;
    }
}
