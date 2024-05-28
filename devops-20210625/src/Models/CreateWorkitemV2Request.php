<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemV2Request\fieldValueList;
use AlibabaCloud\Tea\Model;

class CreateWorkitemV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 19xxxx31947xxxx
     *
     * @var string
     */
    public $assignedTo;

    /**
     * @description This parameter is required.
     *
     * @example Req
     *
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
     * @example 11223331122
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string[]
     */
    public $participants;

    /**
     * @description This parameter is required.
     *
     * @example asd345xxxxx9q9845xxxxx34
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example 455532323455
     *
     * @var string
     */
    public $sprintIdentifier;

    /**
     * @description This parameter is required.
     *
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
     * @example 1561159309......
     *
     * @var string
     */
    public $verifier;

    /**
     * @var string[]
     */
    public $versions;

    /**
     * @description This parameter is required.
     *
     * @example 9uy29901re573f561d69jn40
     *
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
    }

    public function toMap()
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
            $res['fieldValueList'] = [];
            if (null !== $this->fieldValueList && \is_array($this->fieldValueList)) {
                $n = 0;
                foreach ($this->fieldValueList as $item) {
                    $res['fieldValueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parentIdentifier) {
            $res['parentIdentifier'] = $this->parentIdentifier;
        }
        if (null !== $this->participants) {
            $res['participants'] = $this->participants;
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
            $res['tags'] = $this->tags;
        }
        if (null !== $this->trackers) {
            $res['trackers'] = $this->trackers;
        }
        if (null !== $this->verifier) {
            $res['verifier'] = $this->verifier;
        }
        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
        }
        if (null !== $this->workitemTypeIdentifier) {
            $res['workitemTypeIdentifier'] = $this->workitemTypeIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemV2Request
     */
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
                $n                     = 0;
                foreach ($map['fieldValueList'] as $item) {
                    $model->fieldValueList[$n++] = null !== $item ? fieldValueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['parentIdentifier'])) {
            $model->parentIdentifier = $map['parentIdentifier'];
        }
        if (isset($map['participants'])) {
            if (!empty($map['participants'])) {
                $model->participants = $map['participants'];
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
                $model->tags = $map['tags'];
            }
        }
        if (isset($map['trackers'])) {
            if (!empty($map['trackers'])) {
                $model->trackers = $map['trackers'];
            }
        }
        if (isset($map['verifier'])) {
            $model->verifier = $map['verifier'];
        }
        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = $map['versions'];
            }
        }
        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}
