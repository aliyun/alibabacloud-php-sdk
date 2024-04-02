<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateAuditCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $callbackSuggestions;

    /**
     * @var string
     */
    public $callbackTypes;

    /**
     * @var string
     */
    public $cryptType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'callbackSuggestions' => 'CallbackSuggestions',
        'callbackTypes'       => 'CallbackTypes',
        'cryptType'           => 'CryptType',
        'name'                => 'Name',
        'url'                 => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackSuggestions) {
            $res['CallbackSuggestions'] = $this->callbackSuggestions;
        }
        if (null !== $this->callbackTypes) {
            $res['CallbackTypes'] = $this->callbackTypes;
        }
        if (null !== $this->cryptType) {
            $res['CryptType'] = $this->cryptType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuditCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackSuggestions'])) {
            $model->callbackSuggestions = $map['CallbackSuggestions'];
        }
        if (isset($map['CallbackTypes'])) {
            $model->callbackTypes = $map['CallbackTypes'];
        }
        if (isset($map['CryptType'])) {
            $model->cryptType = $map['CryptType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
