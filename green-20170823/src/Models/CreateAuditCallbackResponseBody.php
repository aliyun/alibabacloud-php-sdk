<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateAuditCallbackResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $callbackSuggestions;

    /**
     * @var string[]
     */
    public $callbackTypes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cryptType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $seed;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'callbackSuggestions' => 'CallbackSuggestions',
        'callbackTypes'       => 'CallbackTypes',
        'createTime'          => 'CreateTime',
        'cryptType'           => 'CryptType',
        'id'                  => 'Id',
        'modifiedTime'        => 'ModifiedTime',
        'name'                => 'Name',
        'requestId'           => 'RequestId',
        'seed'                => 'Seed',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cryptType) {
            $res['CryptType'] = $this->cryptType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuditCallbackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackSuggestions'])) {
            if (!empty($map['CallbackSuggestions'])) {
                $model->callbackSuggestions = $map['CallbackSuggestions'];
            }
        }
        if (isset($map['CallbackTypes'])) {
            if (!empty($map['CallbackTypes'])) {
                $model->callbackTypes = $map['CallbackTypes'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CryptType'])) {
            $model->cryptType = $map['CryptType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
