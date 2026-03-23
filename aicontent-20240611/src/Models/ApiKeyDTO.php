<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ApiKeyDTO extends Model
{
    /**
     * @var ClientDTO
     */
    public $client;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $keyPreview;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'client' => 'client',
        'clientId' => 'clientId',
        'deleteTag' => 'deleteTag',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'key' => 'key',
        'keyPreview' => 'keyPreview',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->client) {
            $this->client->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->client) {
            $res['client'] = null !== $this->client ? $this->client->toArray($noStream) : $this->client;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->keyPreview) {
            $res['keyPreview'] = $this->keyPreview;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['client'])) {
            $model->client = ClientDTO::fromMap($map['client']);
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['keyPreview'])) {
            $model->keyPreview = $map['keyPreview'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
