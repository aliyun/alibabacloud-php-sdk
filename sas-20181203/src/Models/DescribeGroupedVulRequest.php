<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupedVulRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var string
     */
    public $assetType;
    /**
     * @var string
     */
    public $attachTypes;
    /**
     * @var string
     */
    public $containerFieldName;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $dealed;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $necessity;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;
    /**
     * @var string
     */
    public $searchTags;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliasName'                  => 'AliasName',
        'assetType'                  => 'AssetType',
        'attachTypes'                => 'AttachTypes',
        'containerFieldName'         => 'ContainerFieldName',
        'currentPage'                => 'CurrentPage',
        'dealed'                     => 'Dealed',
        'groupId'                    => 'GroupId',
        'lang'                       => 'Lang',
        'necessity'                  => 'Necessity',
        'pageSize'                   => 'PageSize',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'searchTags'                 => 'SearchTags',
        'targetType'                 => 'TargetType',
        'type'                       => 'Type',
        'uuids'                      => 'Uuids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
        }

        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->searchTags) {
            $res['SearchTags'] = $this->searchTags;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
        }

        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['SearchTags'])) {
            $model->searchTags = $map['SearchTags'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
