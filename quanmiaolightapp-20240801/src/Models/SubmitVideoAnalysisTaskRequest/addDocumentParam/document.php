<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\addDocumentParam;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\addDocumentParam\document\metadata;

class document extends Model
{
    /**
     * @var string
     */
    public $categoryUuid;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryUuid' => 'categoryUuid',
        'docId' => 'docId',
        'extend1' => 'extend1',
        'extend2' => 'extend2',
        'extend3' => 'extend3',
        'metadata' => 'metadata',
        'tags' => 'tags',
        'title' => 'title',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryUuid) {
            $res['categoryUuid'] = $this->categoryUuid;
        }

        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->extend1) {
            $res['extend1'] = $this->extend1;
        }

        if (null !== $this->extend2) {
            $res['extend2'] = $this->extend2;
        }

        if (null !== $this->extend3) {
            $res['extend3'] = $this->extend3;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['categoryUuid'])) {
            $model->categoryUuid = $map['categoryUuid'];
        }

        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['extend1'])) {
            $model->extend1 = $map['extend1'];
        }

        if (isset($map['extend2'])) {
            $model->extend2 = $map['extend2'];
        }

        if (isset($map['extend3'])) {
            $model->extend3 = $map['extend3'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
