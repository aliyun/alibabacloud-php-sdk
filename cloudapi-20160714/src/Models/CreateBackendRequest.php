<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateBackendRequest\tag;

class CreateBackendRequest extends Model
{
    /**
     * @var string
     */
    public $backendName;

    /**
     * @var string
     */
    public $backendType;

    /**
     * @var bool
     */
    public $createEventBridgeServiceLinkedRole;

    /**
     * @var bool
     */
    public $createSlr;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'backendName' => 'BackendName',
        'backendType' => 'BackendType',
        'createEventBridgeServiceLinkedRole' => 'CreateEventBridgeServiceLinkedRole',
        'createSlr' => 'CreateSlr',
        'description' => 'Description',
        'securityToken' => 'SecurityToken',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }

        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }

        if (null !== $this->createEventBridgeServiceLinkedRole) {
            $res['CreateEventBridgeServiceLinkedRole'] = $this->createEventBridgeServiceLinkedRole;
        }

        if (null !== $this->createSlr) {
            $res['CreateSlr'] = $this->createSlr;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }

        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }

        if (isset($map['CreateEventBridgeServiceLinkedRole'])) {
            $model->createEventBridgeServiceLinkedRole = $map['CreateEventBridgeServiceLinkedRole'];
        }

        if (isset($map['CreateSlr'])) {
            $model->createSlr = $map['CreateSlr'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
