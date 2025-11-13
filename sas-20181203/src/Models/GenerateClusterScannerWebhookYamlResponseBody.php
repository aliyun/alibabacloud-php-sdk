<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GenerateClusterScannerWebhookYamlResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $webhookOpen;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'id' => 'Id',
        'requestId' => 'RequestId',
        'webhookOpen' => 'WebhookOpen',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webhookOpen) {
            $res['WebhookOpen'] = $this->webhookOpen;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WebhookOpen'])) {
            $model->webhookOpen = $map['WebhookOpen'];
        }

        return $model;
    }
}
