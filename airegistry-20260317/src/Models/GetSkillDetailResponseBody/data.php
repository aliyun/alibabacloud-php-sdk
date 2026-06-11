<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillDetailResponseBody\data\versions;

class data extends Model
{
    /**
     * @var string
     */
    public $bizTags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $downloadCount;

    /**
     * @var string
     */
    public $editingVersion;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $onlineCnt;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $reviewingVersion;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var versions[]
     */
    public $versions;

    /**
     * @var bool
     */
    public $writeable;
    protected $_name = [
        'bizTags' => 'BizTags',
        'description' => 'Description',
        'downloadCount' => 'DownloadCount',
        'editingVersion' => 'EditingVersion',
        'enable' => 'Enable',
        'from' => 'From',
        'labels' => 'Labels',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'onlineCnt' => 'OnlineCnt',
        'owner' => 'Owner',
        'reviewingVersion' => 'ReviewingVersion',
        'scope' => 'Scope',
        'updateTime' => 'UpdateTime',
        'versions' => 'Versions',
        'writeable' => 'Writeable',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            $res['BizTags'] = $this->bizTags;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadCount) {
            $res['DownloadCount'] = $this->downloadCount;
        }

        if (null !== $this->editingVersion) {
            $res['EditingVersion'] = $this->editingVersion;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->onlineCnt) {
            $res['OnlineCnt'] = $this->onlineCnt;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->reviewingVersion) {
            $res['ReviewingVersion'] = $this->reviewingVersion;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->writeable) {
            $res['Writeable'] = $this->writeable;
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
        if (isset($map['BizTags'])) {
            $model->bizTags = $map['BizTags'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadCount'])) {
            $model->downloadCount = $map['DownloadCount'];
        }

        if (isset($map['EditingVersion'])) {
            $model->editingVersion = $map['EditingVersion'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['OnlineCnt'])) {
            $model->onlineCnt = $map['OnlineCnt'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ReviewingVersion'])) {
            $model->reviewingVersion = $map['ReviewingVersion'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Writeable'])) {
            $model->writeable = $map['Writeable'];
        }

        return $model;
    }
}
