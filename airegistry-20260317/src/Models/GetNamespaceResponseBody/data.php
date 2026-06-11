<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetNamespaceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

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
    public $promptCount;

    /**
     * @var string
     */
    public $scanPolicy;

    /**
     * @var int
     */
    public $skillCount;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $sourceIndex;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'promptCount' => 'PromptCount',
        'scanPolicy' => 'ScanPolicy',
        'skillCount' => 'SkillCount',
        'source' => 'Source',
        'sourceIndex' => 'SourceIndex',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->promptCount) {
            $res['PromptCount'] = $this->promptCount;
        }

        if (null !== $this->scanPolicy) {
            $res['ScanPolicy'] = $this->scanPolicy;
        }

        if (null !== $this->skillCount) {
            $res['SkillCount'] = $this->skillCount;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceIndex) {
            $res['SourceIndex'] = $this->sourceIndex;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PromptCount'])) {
            $model->promptCount = $map['PromptCount'];
        }

        if (isset($map['ScanPolicy'])) {
            $model->scanPolicy = $map['ScanPolicy'];
        }

        if (isset($map['SkillCount'])) {
            $model->skillCount = $map['SkillCount'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceIndex'])) {
            $model->sourceIndex = $map['SourceIndex'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
