<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkspaceDocResponseBody extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var string
     */
    public $docKey;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dentryUuid' => 'dentryUuid',
        'docKey' => 'docKey',
        'nodeId' => 'nodeId',
        'requestId' => 'requestId',
        'url' => 'url',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['dentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->docKey) {
            $res['docKey'] = $this->docKey;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['dentryUuid'])) {
            $model->dentryUuid = $map['dentryUuid'];
        }

        if (isset($map['docKey'])) {
            $model->docKey = $map['docKey'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
