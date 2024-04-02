<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateImageLibRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $serviceModule;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'bizTypes'      => 'BizTypes',
        'category'      => 'Category',
        'enable'        => 'Enable',
        'name'          => 'Name',
        'scene'         => 'Scene',
        'serviceModule' => 'ServiceModule',
        'sourceIp'      => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypes) {
            $res['BizTypes'] = $this->bizTypes;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->serviceModule) {
            $res['ServiceModule'] = $this->serviceModule;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypes'])) {
            $model->bizTypes = $map['BizTypes'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ServiceModule'])) {
            $model->serviceModule = $map['ServiceModule'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
