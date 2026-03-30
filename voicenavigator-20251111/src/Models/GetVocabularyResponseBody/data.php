<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetVocabularyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $vocabularyId;

    /**
     * @var string
     */
    public $wordCount;

    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'tenantId' => 'TenantId',
        'updatedTime' => 'UpdatedTime',
        'vocabularyId' => 'VocabularyId',
        'wordCount' => 'WordCount',
        'words' => 'Words',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }

        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
        }

        if (null !== $this->words) {
            $res['Words'] = $this->words;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }

        return $model;
    }
}
