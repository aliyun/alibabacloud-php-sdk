<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\assignedTo;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\customFields;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\space;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase\tags;
use AlibabaCloud\Tea\Model;

class testcase extends Model
{
    /**
     * @var assignedTo
     */
    public $assignedTo;

    /**
     * @example Req
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @var customFields[]
     */
    public $customFields;

    /**
     * @example 1621578648000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $identifier;

    /**
     * @var space
     */
    public $space;

    /**
     * @example 测试工作项
     *
     * @var string
     */
    public $subject;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'assignedTo'         => 'assignedTo',
        'categoryIdentifier' => 'categoryIdentifier',
        'customFields'       => 'customFields',
        'gmtCreate'          => 'gmtCreate',
        'identifier'         => 'identifier',
        'space'              => 'space',
        'subject'            => 'subject',
        'tags'               => 'tags',
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
        if (null !== $this->customFields) {
            $res['customFields'] = [];
            if (null !== $this->customFields && \is_array($this->customFields)) {
                $n = 0;
                foreach ($this->customFields as $item) {
                    $res['customFields'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['space'] = null !== $this->space ? $this->space->toMap() : null;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n                   = 0;
                foreach ($map['customFields'] as $item) {
                    $model->customFields[$n++] = null !== $item ? customFields::fromMap($item) : $item;
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
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
