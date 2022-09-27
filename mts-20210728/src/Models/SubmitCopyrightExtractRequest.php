<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\Tea\Model;

class SubmitCopyrightExtractRequest extends Model
{
    /**
     * @var string
     */
    public $callBack;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'callBack' => 'CallBack',
        'input'    => 'Input',
        'url'      => 'Url',
        'userData' => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCopyrightExtractRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
