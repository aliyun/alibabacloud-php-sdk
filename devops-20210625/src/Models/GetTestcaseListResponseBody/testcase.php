<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\assignedTo;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\customFields;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\space;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\tags;

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
     * @var customFields[]
     */
    public $customFields;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var space
     */
    public $space;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'assignedTo' => 'assignedTo',
        'categoryIdentifier' => 'categoryIdentifier',
        'customFields' => 'customFields',
        'gmtCreate' => 'gmtCreate',
        'identifier' => 'identifier',
        'space' => 'space',
        'subject' => 'subject',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (null !== $this->assignedTo) {
            $this->assignedTo->validate();
        }
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (null !== $this->space) {
            $this->space->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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

        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['customFields'] = [];
                $n1 = 0;
                foreach ($this->customFields as $item1) {
                    $res['customFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->space) {
            $res['space'] = null !== $this->space ? $this->space->toArray($noStream) : $this->space;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['assignedTo'])) {
            $model->assignedTo = assignedTo::fromMap($map['assignedTo']);
        }

        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }

        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n1 = 0;
                foreach ($map['customFields'] as $item1) {
                    $model->customFields[$n1] = customFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['space'])) {
            $model->space = space::fromMap($map['space']);
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
