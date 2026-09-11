<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetGraphSchemaDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $businessProfile;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $contentHash;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $gmtCreate;

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
    public $graphStatus;

    /**
     * @var bool
     */
    public $hasDraft;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $yamlEdit;
    protected $_name = [
        'businessProfile' => 'businessProfile',
        'code' => 'code',
        'contentHash' => 'contentHash',
        'createdBy' => 'createdBy',
        'displayName' => 'displayName',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'graphName' => 'graphName',
        'graphStatus' => 'graphStatus',
        'hasDraft' => 'hasDraft',
        'message' => 'message',
        'requestId' => 'requestId',
        'schemaVersion' => 'schemaVersion',
        'yamlEdit' => 'yamlEdit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessProfile) {
            $res['businessProfile'] = $this->businessProfile;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->contentHash) {
            $res['contentHash'] = $this->contentHash;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->graphStatus) {
            $res['graphStatus'] = $this->graphStatus;
        }

        if (null !== $this->hasDraft) {
            $res['hasDraft'] = $this->hasDraft;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->yamlEdit) {
            $res['yamlEdit'] = $this->yamlEdit;
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
        if (isset($map['businessProfile'])) {
            $model->businessProfile = $map['businessProfile'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['contentHash'])) {
            $model->contentHash = $map['contentHash'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['graphStatus'])) {
            $model->graphStatus = $map['graphStatus'];
        }

        if (isset($map['hasDraft'])) {
            $model->hasDraft = $map['hasDraft'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['yamlEdit'])) {
            $model->yamlEdit = $map['yamlEdit'];
        }

        return $model;
    }
}
