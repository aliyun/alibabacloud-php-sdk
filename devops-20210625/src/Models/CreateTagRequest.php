<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateTagRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $ref;
    /**
     * @var string
     */
    public $tagName;
    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'message'        => 'message',
        'ref'            => 'ref',
        'tagName'        => 'tagName',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->ref) {
            $res['ref'] = $this->ref;
        }

        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['ref'])) {
            $model->ref = $map['ref'];
        }

        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
