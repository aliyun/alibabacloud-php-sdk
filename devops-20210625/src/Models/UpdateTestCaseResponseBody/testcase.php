<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\assignedTo;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\creator;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\directory;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\modifier;
use AlibabaCloud\Tea\Model;

class testcase extends Model
{
    /**
     * @var assignedTo
     */
    public $assignedTo;

    /**
     * @example TestCase
     *
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
     * @example c7f7033b021ead52cc42721382
     *
     * @var string
     */
    public $identifier;

    /**
     * @var modifier
     */
    public $modifier;

    /**
     * @example 1e7d7a412b91a2144ec4aa8411
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example TestRepo
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = null !== $this->assignedTo ? $this->assignedTo->toMap() : null;
        }
        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }
        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->detailInfo) {
            $res['detailInfo'] = null !== $this->detailInfo ? $this->detailInfo->toMap() : null;
        }
        if (null !== $this->directory) {
            $res['directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = null !== $this->modifier ? $this->modifier->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return testcase
     */
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
