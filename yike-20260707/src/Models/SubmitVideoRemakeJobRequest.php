<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class SubmitVideoRemakeJobRequest extends Model
{
    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $remakeParams;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'input' => 'Input',
        'remakeParams' => 'RemakeParams',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->remakeParams) {
            $res['RemakeParams'] = $this->remakeParams;
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
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['RemakeParams'])) {
            $model->remakeParams = $map['RemakeParams'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
