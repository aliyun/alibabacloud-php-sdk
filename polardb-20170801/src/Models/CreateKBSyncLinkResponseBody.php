<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateKBSyncLinkResponseBody extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imPlatform;

    /**
     * @var string
     */
    public $linkId;

    /**
     * @var string
     */
    public $linkName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceDir;

    /**
     * @var int
     */
    public $syncIntervalMinutes;

    /**
     * @var string
     */
    public $syncStatus;
    protected $_name = [
        'clientId' => 'ClientId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'imPlatform' => 'ImPlatform',
        'linkId' => 'LinkId',
        'linkName' => 'LinkName',
        'requestId' => 'RequestId',
        'sourceDir' => 'SourceDir',
        'syncIntervalMinutes' => 'SyncIntervalMinutes',
        'syncStatus' => 'SyncStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imPlatform) {
            $res['ImPlatform'] = $this->imPlatform;
        }

        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }

        if (null !== $this->linkName) {
            $res['LinkName'] = $this->linkName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceDir) {
            $res['SourceDir'] = $this->sourceDir;
        }

        if (null !== $this->syncIntervalMinutes) {
            $res['SyncIntervalMinutes'] = $this->syncIntervalMinutes;
        }

        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImPlatform'])) {
            $model->imPlatform = $map['ImPlatform'];
        }

        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }

        if (isset($map['LinkName'])) {
            $model->linkName = $map['LinkName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceDir'])) {
            $model->sourceDir = $map['SourceDir'];
        }

        if (isset($map['SyncIntervalMinutes'])) {
            $model->syncIntervalMinutes = $map['SyncIntervalMinutes'];
        }

        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }

        return $model;
    }
}
