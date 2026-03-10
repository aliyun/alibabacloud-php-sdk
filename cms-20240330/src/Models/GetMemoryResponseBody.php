<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetMemoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $immutable;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'expirationDate' => 'expirationDate',
        'id' => 'id',
        'immutable' => 'immutable',
        'memory' => 'memory',
        'metadata' => 'metadata',
        'organization' => 'organization',
        'owner' => 'owner',
        'requestId' => 'requestId',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->expirationDate) {
            $res['expirationDate'] = $this->expirationDate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->immutable) {
            $res['immutable'] = $this->immutable;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = $this->metadata;
        }

        if (null !== $this->organization) {
            $res['organization'] = $this->organization;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['expirationDate'])) {
            $model->expirationDate = $map['expirationDate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['immutable'])) {
            $model->immutable = $map['immutable'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = $map['metadata'];
        }

        if (isset($map['organization'])) {
            $model->organization = $map['organization'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
