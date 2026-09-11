<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SaveGraphDraftResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $draftChangeId;

    /**
     * @var string
     */
    public $draftContentHash;

    /**
     * @var string
     */
    public $elementType;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'code' => 'code',
        'draftChangeId' => 'draftChangeId',
        'draftContentHash' => 'draftContentHash',
        'elementType' => 'elementType',
        'gmtModified' => 'gmtModified',
        'graphName' => 'graphName',
        'message' => 'message',
        'operationType' => 'operationType',
        'requestId' => 'requestId',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->draftChangeId) {
            $res['draftChangeId'] = $this->draftChangeId;
        }

        if (null !== $this->draftContentHash) {
            $res['draftContentHash'] = $this->draftContentHash;
        }

        if (null !== $this->elementType) {
            $res['elementType'] = $this->elementType;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['draftChangeId'])) {
            $model->draftChangeId = $map['draftChangeId'];
        }

        if (isset($map['draftContentHash'])) {
            $model->draftContentHash = $map['draftContentHash'];
        }

        if (isset($map['elementType'])) {
            $model->elementType = $map['elementType'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
