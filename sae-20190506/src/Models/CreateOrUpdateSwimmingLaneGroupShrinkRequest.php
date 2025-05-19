<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CreateOrUpdateSwimmingLaneGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appIdsShrink;

    /**
     * @var string
     */
    public $entryAppId;

    /**
     * @var string
     */
    public $entryAppType;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $swimVersion;
    protected $_name = [
        'appIdsShrink' => 'AppIds',
        'entryAppId' => 'EntryAppId',
        'entryAppType' => 'EntryAppType',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'namespaceId' => 'NamespaceId',
        'swimVersion' => 'SwimVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIdsShrink) {
            $res['AppIds'] = $this->appIdsShrink;
        }

        if (null !== $this->entryAppId) {
            $res['EntryAppId'] = $this->entryAppId;
        }

        if (null !== $this->entryAppType) {
            $res['EntryAppType'] = $this->entryAppType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->swimVersion) {
            $res['SwimVersion'] = $this->swimVersion;
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
        if (isset($map['AppIds'])) {
            $model->appIdsShrink = $map['AppIds'];
        }

        if (isset($map['EntryAppId'])) {
            $model->entryAppId = $map['EntryAppId'];
        }

        if (isset($map['EntryAppType'])) {
            $model->entryAppType = $map['EntryAppType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SwimVersion'])) {
            $model->swimVersion = $map['SwimVersion'];
        }

        return $model;
    }
}
