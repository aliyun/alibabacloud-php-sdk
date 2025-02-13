<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\creator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\linkSourceInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\statisticalInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\updater;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\visitorInfo;

class children extends Model
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
     * @var space
     */
    public $space;
    /**
     * @var string
     */
    public $spaceId;
    /**
     * @var statisticalInfo
     */
    public $statisticalInfo;
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
        'contentType'     => 'ContentType',
        'createdTime'     => 'CreatedTime',
        'creator'         => 'Creator',
        'dentryId'        => 'DentryId',
        'dentryType'      => 'DentryType',
        'dentryUuid'      => 'DentryUuid',
        'docKey'          => 'DocKey',
        'extension'       => 'Extension',
        'hasChildren'     => 'HasChildren',
        'linkSourceInfo'  => 'LinkSourceInfo',
        'name'            => 'Name',
        'path'            => 'Path',
        'space'           => 'Space',
        'spaceId'         => 'SpaceId',
        'statisticalInfo' => 'StatisticalInfo',
        'updatedTime'     => 'UpdatedTime',
        'updater'         => 'Updater',
        'url'             => 'Url',
        'visitorInfo'     => 'VisitorInfo',
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
        if (null !== $this->statisticalInfo) {
            $this->statisticalInfo->validate();
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
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }

        if (null !== $this->dentryType) {
            $res['DentryType'] = $this->dentryType;
        }

        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->hasChildren) {
            $res['HasChildren'] = $this->hasChildren;
        }

        if (null !== $this->linkSourceInfo) {
            $res['LinkSourceInfo'] = null !== $this->linkSourceInfo ? $this->linkSourceInfo->toArray($noStream) : $this->linkSourceInfo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->space) {
            $res['Space'] = null !== $this->space ? $this->space->toArray($noStream) : $this->space;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->statisticalInfo) {
            $res['StatisticalInfo'] = null !== $this->statisticalInfo ? $this->statisticalInfo->toArray($noStream) : $this->statisticalInfo;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->updater) {
            $res['Updater'] = null !== $this->updater ? $this->updater->toArray($noStream) : $this->updater;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->visitorInfo) {
            $res['VisitorInfo'] = null !== $this->visitorInfo ? $this->visitorInfo->toArray($noStream) : $this->visitorInfo;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }

        if (isset($map['DentryType'])) {
            $model->dentryType = $map['DentryType'];
        }

        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }

        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['HasChildren'])) {
            $model->hasChildren = $map['HasChildren'];
        }

        if (isset($map['LinkSourceInfo'])) {
            $model->linkSourceInfo = linkSourceInfo::fromMap($map['LinkSourceInfo']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Space'])) {
            $model->space = space::fromMap($map['Space']);
        }

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['StatisticalInfo'])) {
            $model->statisticalInfo = statisticalInfo::fromMap($map['StatisticalInfo']);
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['Updater'])) {
            $model->updater = updater::fromMap($map['Updater']);
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['VisitorInfo'])) {
            $model->visitorInfo = visitorInfo::fromMap($map['VisitorInfo']);
        }

        return $model;
    }
}
