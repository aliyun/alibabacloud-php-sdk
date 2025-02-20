<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\assignedTo;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\creator;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\detailInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\directory;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\modifier;

class testcase extends Model
{
    /**
     * @var assignedTo
     */
    public $assignedTo;
    /**
     * @var string
     */
    public $categoryIdentifier;
    /**
     * @var creator
     */
    public $creator;
    /**
     * @var detailInfo
     */
    public $detailInfo;
    /**
     * @var directory
     */
    public $directory;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var modifier
     */
    public $modifier;
    /**
     * @var string
     */
    public $spaceIdentifier;
    /**
     * @var string
     */
    public $spaceType;
    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'assignedTo'         => 'assignedTo',
        'categoryIdentifier' => 'categoryIdentifier',
        'creator'            => 'creator',
        'detailInfo'         => 'detailInfo',
        'directory'          => 'directory',
        'identifier'         => 'identifier',
        'modifier'           => 'modifier',
        'spaceIdentifier'    => 'spaceIdentifier',
        'spaceType'          => 'spaceType',
        'subject'            => 'subject',
    ];

    public function validate()
    {
        if (null !== $this->assignedTo) {
            $this->assignedTo->validate();
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->detailInfo) {
            $this->detailInfo->validate();
        }
        if (null !== $this->directory) {
            $this->directory->validate();
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = null !== $this->assignedTo ? $this->assignedTo->toArray($noStream) : $this->assignedTo;
        }

        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }

        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->detailInfo) {
            $res['detailInfo'] = null !== $this->detailInfo ? $this->detailInfo->toArray($noStream) : $this->detailInfo;
        }

        if (null !== $this->directory) {
            $res['directory'] = null !== $this->directory ? $this->directory->toArray($noStream) : $this->directory;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
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
            $model->assignedTo = assignedTo::fromMap($map['assignedTo']);
        }

        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }

        if (isset($map['creator'])) {
            $model->creator = creator::fromMap($map['creator']);
        }

        if (isset($map['detailInfo'])) {
            $model->detailInfo = detailInfo::fromMap($map['detailInfo']);
        }

        if (isset($map['directory'])) {
            $model->directory = directory::fromMap($map['directory']);
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = modifier::fromMap($map['modifier']);
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
