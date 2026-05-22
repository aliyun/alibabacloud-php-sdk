<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyResponseBody;

use AlibabaCloud\Dara\Model;

class apiKey extends Model
{
    /**
     * @var int
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $apiKeyValue;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKeyId' => 'apiKeyId',
        'apiKeyValue' => 'apiKeyValue',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['apiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->apiKeyValue) {
            $res['apiKeyValue'] = $this->apiKeyValue;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['apiKeyId'])) {
            $model->apiKeyId = $map['apiKeyId'];
        }

        if (isset($map['apiKeyValue'])) {
            $model->apiKeyValue = $map['apiKeyValue'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
