<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\creator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\linkSourceInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\updater;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\visitorInfo;

class QueryDentryResponseBody extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var string
     */
    public $dentryId;

    /**
     * @var string
     */
    public $dentryType;

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
    public $extension;

    /**
     * @var bool
     */
    public $hasChildren;

    /**
     * @var linkSourceInfo
     */
    public $linkSourceInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var space
     */
    public $space;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var updater
     */
    public $updater;

    /**
     * @var string
     */
    public $url;

    /**
     * @var visitorInfo
     */
    public $visitorInfo;
    protected $_name = [
        'contentType' => 'contentType',
        'createdTime' => 'createdTime',
        'creator' => 'creator',
        'dentryId' => 'dentryId',
        'dentryType' => 'dentryType',
        'dentryUuid' => 'dentryUuid',
        'docKey' => 'docKey',
        'extension' => 'extension',
        'hasChildren' => 'hasChildren',
        'linkSourceInfo' => 'linkSourceInfo',
        'name' => 'name',
        'path' => 'path',
        'requestId' => 'requestId',
        'space' => 'space',
        'spaceId' => 'spaceId',
        'updatedTime' => 'updatedTime',
        'updater' => 'updater',
        'url' => 'url',
        'visitorInfo' => 'visitorInfo',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->linkSourceInfo) {
            $this->linkSourceInfo->validate();
        }
        if (null !== $this->space) {
            $this->space->validate();
        }
        if (null !== $this->updater) {
            $this->updater->validate();
        }
        if (null !== $this->visitorInfo) {
            $this->visitorInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->dentryId) {
            $res['dentryId'] = $this->dentryId;
        }

        if (null !== $this->dentryType) {
            $res['dentryType'] = $this->dentryType;
        }

        if (null !== $this->dentryUuid) {
            $res['dentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->docKey) {
            $res['docKey'] = $this->docKey;
        }

        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }

        if (null !== $this->hasChildren) {
            $res['hasChildren'] = $this->hasChildren;
        }

        if (null !== $this->linkSourceInfo) {
            $res['linkSourceInfo'] = null !== $this->linkSourceInfo ? $this->linkSourceInfo->toArray($noStream) : $this->linkSourceInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->space) {
            $res['space'] = null !== $this->space ? $this->space->toArray($noStream) : $this->space;
        }

        if (null !== $this->spaceId) {
            $res['spaceId'] = $this->spaceId;
        }

        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
        }

        if (null !== $this->updater) {
            $res['updater'] = null !== $this->updater ? $this->updater->toArray($noStream) : $this->updater;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->visitorInfo) {
            $res['visitorInfo'] = null !== $this->visitorInfo ? $this->visitorInfo->toArray($noStream) : $this->visitorInfo;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['creator'])) {
            $model->creator = creator::fromMap($map['creator']);
        }

        if (isset($map['dentryId'])) {
            $model->dentryId = $map['dentryId'];
        }

        if (isset($map['dentryType'])) {
            $model->dentryType = $map['dentryType'];
        }

        if (isset($map['dentryUuid'])) {
            $model->dentryUuid = $map['dentryUuid'];
        }

        if (isset($map['docKey'])) {
            $model->docKey = $map['docKey'];
        }

        if (isset($map['extension'])) {
            $model->extension = $map['extension'];
        }

        if (isset($map['hasChildren'])) {
            $model->hasChildren = $map['hasChildren'];
        }

        if (isset($map['linkSourceInfo'])) {
            $model->linkSourceInfo = linkSourceInfo::fromMap($map['linkSourceInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['space'])) {
            $model->space = space::fromMap($map['space']);
        }

        if (isset($map['spaceId'])) {
            $model->spaceId = $map['spaceId'];
        }

        if (isset($map['updatedTime'])) {
            $model->updatedTime = $map['updatedTime'];
        }

        if (isset($map['updater'])) {
            $model->updater = updater::fromMap($map['updater']);
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['visitorInfo'])) {
            $model->visitorInfo = visitorInfo::fromMap($map['visitorInfo']);
        }

        return $model;
    }
}
