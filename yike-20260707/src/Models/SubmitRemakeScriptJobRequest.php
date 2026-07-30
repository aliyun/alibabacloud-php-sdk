<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class SubmitRemakeScriptJobRequest extends Model
{
    /**
     * @var string
     */
    public $remakeParams;

    /**
     * @var string
     */
    public $remakeType;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'remakeParams' => 'RemakeParams',
        'remakeType' => 'RemakeType',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remakeParams) {
            $res['RemakeParams'] = $this->remakeParams;
        }

        if (null !== $this->remakeType) {
            $res['RemakeType'] = $this->remakeType;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['RemakeParams'])) {
            $model->remakeParams = $map['RemakeParams'];
        }

        if (isset($map['RemakeType'])) {
            $model->remakeType = $map['RemakeType'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
