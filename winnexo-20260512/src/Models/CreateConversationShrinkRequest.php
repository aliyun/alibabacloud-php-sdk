<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateConversationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $operatingObjectNameShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'metadata' => 'metadata',
        'objectId' => 'objectId',
        'operatingObjectNameShrink' => 'operatingObjectName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['metadata'] = $this->metadata;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->operatingObjectNameShrink) {
            $res['operatingObjectName'] = $this->operatingObjectNameShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['metadata'])) {
            $model->metadata = $map['metadata'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectNameShrink = $map['operatingObjectName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
