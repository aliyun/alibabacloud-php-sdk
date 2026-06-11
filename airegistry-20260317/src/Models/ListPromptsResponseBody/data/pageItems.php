<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListPromptsResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageItems extends Model
{
    /**
     * @var string[]
     */
    public $bizTags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $editingVersion;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var int
     */
    public $onlineCnt;

    /**
     * @var string
     */
    public $promptKey;

    /**
     * @var string
     */
    public $reviewingVersion;

    /**
     * @var int
     */
    public $schemaVersion;
    protected $_name = [
        'bizTags' => 'BizTags',
        'description' => 'Description',
        'editingVersion' => 'EditingVersion',
        'gmtModified' => 'GmtModified',
        'labels' => 'Labels',
        'latestVersion' => 'LatestVersion',
        'onlineCnt' => 'OnlineCnt',
        'promptKey' => 'PromptKey',
        'reviewingVersion' => 'ReviewingVersion',
        'schemaVersion' => 'SchemaVersion',
    ];

    public function validate()
    {
        if (\is_array($this->bizTags)) {
            Model::validateArray($this->bizTags);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            if (\is_array($this->bizTags)) {
                $res['BizTags'] = [];
                $n1 = 0;
                foreach ($this->bizTags as $item1) {
                    $res['BizTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->editingVersion) {
            $res['EditingVersion'] = $this->editingVersion;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }

        if (null !== $this->onlineCnt) {
            $res['OnlineCnt'] = $this->onlineCnt;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
        }

        if (null !== $this->reviewingVersion) {
            $res['ReviewingVersion'] = $this->reviewingVersion;
        }

        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
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
            if (!empty($map['BizTags'])) {
                $model->bizTags = [];
                $n1 = 0;
                foreach ($map['BizTags'] as $item1) {
                    $model->bizTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EditingVersion'])) {
            $model->editingVersion = $map['EditingVersion'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }

        if (isset($map['OnlineCnt'])) {
            $model->onlineCnt = $map['OnlineCnt'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        if (isset($map['ReviewingVersion'])) {
            $model->reviewingVersion = $map['ReviewingVersion'];
        }

        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        return $model;
    }
}
