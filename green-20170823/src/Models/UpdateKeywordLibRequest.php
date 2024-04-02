<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateKeywordLibRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypes;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'bizTypes'  => 'BizTypes',
        'enable'    => 'Enable',
        'id'        => 'Id',
        'lang'      => 'Lang',
        'matchMode' => 'MatchMode',
        'name'      => 'Name',
        'sourceIp'  => 'SourceIp',
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
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKeywordLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypes'])) {
            $model->bizTypes = $map['BizTypes'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
