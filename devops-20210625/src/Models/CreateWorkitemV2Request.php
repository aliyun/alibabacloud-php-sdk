<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemV2Request\fieldValueList;

class CreateWorkitemV2Request extends Model
{
    /**
     * @var string
     */
    public $assignedTo;
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $description;
    /**
     * @var fieldValueList[]
     */
    public $fieldValueList;
    /**
     * @var string
     */
    public $parentIdentifier;
    /**
     * @var string[]
     */
    public $participants;
    /**
     * @var string
     */
    public $spaceIdentifier;
    /**
     * @var string
     */
    public $sprintIdentifier;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string[]
     */
    public $tags;
    /**
     * @var string[]
     */
    public $trackers;
    /**
     * @var string
     */
    public $verifier;
    /**
     * @var string[]
     */
    public $versions;
    /**
     * @var string
     */
    public $workitemTypeIdentifier;
    protected $_name = [
        'assignedTo'             => 'assignedTo',
        'category'               => 'category',
        'description'            => 'description',
        'fieldValueList'         => 'fieldValueList',
        'parentIdentifier'       => 'parentIdentifier',
        'participants'           => 'participants',
        'spaceIdentifier'        => 'spaceIdentifier',
        'sprintIdentifier'       => 'sprintIdentifier',
        'subject'                => 'subject',
        'tags'                   => 'tags',
        'trackers'               => 'trackers',
        'verifier'               => 'verifier',
        'versions'               => 'versions',
        'workitemTypeIdentifier' => 'workitemTypeIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->fieldValueList)) {
            Model::validateArray($this->fieldValueList);
        }
        if (\is_array($this->participants)) {
            Model::validateArray($this->participants);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->trackers)) {
            Model::validateArray($this->trackers);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fieldValueList) {
            if (\is_array($this->fieldValueList)) {
                $res['fieldValueList'] = [];
                $n1                    = 0;
                foreach ($this->fieldValueList as $item1) {
                    $res['fieldValueList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->parentIdentifier) {
            $res['parentIdentifier'] = $this->parentIdentifier;
        }

        if (null !== $this->participants) {
            if (\is_array($this->participants)) {
                $res['participants'] = [];
                $n1                  = 0;
                foreach ($this->participants as $item1) {
                    $res['participants'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->sprintIdentifier) {
            $res['sprintIdentifier'] = $this->sprintIdentifier;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->trackers) {
            if (\is_array($this->trackers)) {
                $res['trackers'] = [];
                $n1              = 0;
                foreach ($this->trackers as $item1) {
                    $res['trackers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->verifier) {
            $res['verifier'] = $this->verifier;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1              = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->workitemTypeIdentifier) {
            $res['workitemTypeIdentifier'] = $this->workitemTypeIdentifier;
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
        if (isset($map['assignedTo'])) {
            $model->assignedTo = $map['assignedTo'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['fieldValueList'])) {
            if (!empty($map['fieldValueList'])) {
                $model->fieldValueList = [];
                $n1                    = 0;
                foreach ($map['fieldValueList'] as $item1) {
                    $model->fieldValueList[$n1++] = fieldValueList::fromMap($item1);
                }
            }
        }

        if (isset($map['parentIdentifier'])) {
            $model->parentIdentifier = $map['parentIdentifier'];
        }

        if (isset($map['participants'])) {
            if (!empty($map['participants'])) {
                $model->participants = [];
                $n1                  = 0;
                foreach ($map['participants'] as $item1) {
                    $model->participants[$n1++] = $item1;
                }
            }
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['sprintIdentifier'])) {
            $model->sprintIdentifier = $map['sprintIdentifier'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['trackers'])) {
            if (!empty($map['trackers'])) {
                $model->trackers = [];
                $n1              = 0;
                foreach ($map['trackers'] as $item1) {
                    $model->trackers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['verifier'])) {
            $model->verifier = $map['verifier'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1              = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}
