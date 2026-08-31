<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetTopicsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetTopicsResponseBody\data\topicList\owners;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetTopicsResponseBody\data\topicList\visibleUserGroups;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetTopicsResponseBody\data\topicList\visibleUsers;

class topicList extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var owners[]
     */
    public $owners;

    /**
     * @var string
     */
    public $topicDescription;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $visibilityType;

    /**
     * @var visibleUserGroups[]
     */
    public $visibleUserGroups;

    /**
     * @var visibleUsers[]
     */
    public $visibleUsers;
    protected $_name = [
        'assetType' => 'AssetType',
        'modifyTime' => 'ModifyTime',
        'owners' => 'Owners',
        'topicDescription' => 'TopicDescription',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
        'visibilityType' => 'VisibilityType',
        'visibleUserGroups' => 'VisibleUserGroups',
        'visibleUsers' => 'VisibleUsers',
    ];

    public function validate()
    {
        if (\is_array($this->owners)) {
            Model::validateArray($this->owners);
        }
        if (\is_array($this->visibleUserGroups)) {
            Model::validateArray($this->visibleUserGroups);
        }
        if (\is_array($this->visibleUsers)) {
            Model::validateArray($this->visibleUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->owners) {
            if (\is_array($this->owners)) {
                $res['Owners'] = [];
                $n1 = 0;
                foreach ($this->owners as $item1) {
                    $res['Owners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicDescription) {
            $res['TopicDescription'] = $this->topicDescription;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->visibilityType) {
            $res['VisibilityType'] = $this->visibilityType;
        }

        if (null !== $this->visibleUserGroups) {
            if (\is_array($this->visibleUserGroups)) {
                $res['VisibleUserGroups'] = [];
                $n1 = 0;
                foreach ($this->visibleUserGroups as $item1) {
                    $res['VisibleUserGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visibleUsers) {
            if (\is_array($this->visibleUsers)) {
                $res['VisibleUsers'] = [];
                $n1 = 0;
                foreach ($this->visibleUsers as $item1) {
                    $res['VisibleUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Owners'])) {
            if (!empty($map['Owners'])) {
                $model->owners = [];
                $n1 = 0;
                foreach ($map['Owners'] as $item1) {
                    $model->owners[$n1] = owners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicDescription'])) {
            $model->topicDescription = $map['TopicDescription'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['VisibilityType'])) {
            $model->visibilityType = $map['VisibilityType'];
        }

        if (isset($map['VisibleUserGroups'])) {
            if (!empty($map['VisibleUserGroups'])) {
                $model->visibleUserGroups = [];
                $n1 = 0;
                foreach ($map['VisibleUserGroups'] as $item1) {
                    $model->visibleUserGroups[$n1] = visibleUserGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VisibleUsers'])) {
            if (!empty($map['VisibleUsers'])) {
                $model->visibleUsers = [];
                $n1 = 0;
                foreach ($map['VisibleUsers'] as $item1) {
                    $model->visibleUsers[$n1] = visibleUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
