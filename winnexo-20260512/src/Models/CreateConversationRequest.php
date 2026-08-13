<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateConversationRequest extends Model
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
     * @var mixed[]
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'metadata' => 'metadata',
        'objectId' => 'objectId',
        'operatingObjectName' => 'operatingObjectName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->operatingObjectName)) {
            Model::validateArray($this->operatingObjectName);
        }
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
            if (!empty($map['operatingObjectName'])) {
                $model->operatingObjectName = [];
                $n1 = 0;
                foreach ($map['operatingObjectName'] as $item1) {
                    $model->operatingObjectName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
