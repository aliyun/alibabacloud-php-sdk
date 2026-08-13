<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateChatSessionResponseBody;

use AlibabaCloud\Dara\Model;

class session extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isExpired;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string[]
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'id' => 'id',
        'isExpired' => 'isExpired',
        'metadata' => 'metadata',
        'model' => 'model',
        'object' => 'object',
        'objectId' => 'objectId',
        'operatingObjectName' => 'operatingObjectName',
        'title' => 'title',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->operatingObjectName)) {
            Model::validateArray($this->operatingObjectName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isExpired) {
            $res['isExpired'] = $this->isExpired;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->operatingObjectName) {
            if (\is_array($this->operatingObjectName)) {
                $res['operatingObjectName'] = [];
                $n1 = 0;
                foreach ($this->operatingObjectName as $item1) {
                    $res['operatingObjectName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isExpired'])) {
            $model->isExpired = $map['isExpired'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['operatingObjectName'])) {
            if (!empty($map['operatingObjectName'])) {
                $model->operatingObjectName = [];
                $n1 = 0;
                foreach ($map['operatingObjectName'] as $item1) {
                    $model->operatingObjectName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
