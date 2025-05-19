<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CreateOrUpdateSwimmingLaneGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIds;

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
        'appIds' => 'AppIds',
        'entryAppId' => 'EntryAppId',
        'entryAppType' => 'EntryAppType',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'namespaceId' => 'NamespaceId',
        'swimVersion' => 'SwimVersion',
    ];

    public function validate()
    {
        if (\is_array($this->appIds)) {
            Model::validateArray($this->appIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            if (\is_array($this->appIds)) {
                $res['AppIds'] = [];
                $n1 = 0;
                foreach ($this->appIds as $item1) {
                    $res['AppIds'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['AppIds'])) {
                $model->appIds = [];
                $n1 = 0;
                foreach ($map['AppIds'] as $item1) {
                    $model->appIds[$n1++] = $item1;
                }
            }
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
