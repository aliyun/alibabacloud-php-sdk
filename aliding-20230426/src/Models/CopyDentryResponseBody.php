<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryResponseBody\linkSourceInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryResponseBody\space;
use AlibabaCloud\Tea\Model;

class CopyDentryResponseBody extends Model
{
    /**
     * @example alidoc
     *
     * @var string
     */
    public $contentType;

    /**
     * @example 12345678
     *
     * @var int
     */
    public $createdTime;

    /**
     * @var mixed[]
     */
    public $creator;

    /**
     * @example abc
     *
     * @var string
     */
    public $dentryId;

    /**
     * @example file
     *
     * @var string
     */
    public $dentryType;

    /**
     * @example cdefg
     *
     * @var string
     */
    public $dentryUuid;

    /**
     * @example aabbcc
     *
     * @var string
     */
    public $docKey;

    /**
     * @example alidoc
     *
     * @var string
     */
    public $extension;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasChildren;

    /**
     * @var linkSourceInfo
     */
    public $linkSourceInfo;

    /**
     * @example hello
     *
     * @var string
     */
    public $name;

    /**
     * @example 测试组织/测试知识库/abc
     *
     * @var string
     */
    public $path;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var space
     */
    public $space;

    /**
     * @example bcd
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example 12345678
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @example {\\"UserId\\": \\"353851\\", \\"Name\\": u\\"\\u848b\\u7fbd\\u4e2d\\"}
     *
     * @var mixed[]
     */
    public $updater;

    /**
     * @example https://xxx.yy
     *
     * @var string
     */
    public $url;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;

    /**
     * @var mixed[]
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
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
        'visitorInfo' => 'visitorInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
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
            $res['linkSourceInfo'] = null !== $this->linkSourceInfo ? $this->linkSourceInfo->toMap() : null;
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
            $res['space'] = null !== $this->space ? $this->space->toMap() : null;
        }
        if (null !== $this->spaceId) {
            $res['spaceId'] = $this->spaceId;
        }
        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
        }
        if (null !== $this->updater) {
            $res['updater'] = $this->updater;
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
        if (null !== $this->visitorInfo) {
            $res['visitorInfo'] = $this->visitorInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyDentryResponseBody
     */
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
            $model->creator = $map['creator'];
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
            $model->updater = $map['updater'];
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
        if (isset($map['visitorInfo'])) {
            $model->visitorInfo = $map['visitorInfo'];
        }

        return $model;
    }
}
