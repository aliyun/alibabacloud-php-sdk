<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateAnnouncementRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $displayPage;

    /**
     * @var string
     */
    public $displayType;

    /**
     * @var string
     */
    public $effectiveEnd;

    /**
     * @var string
     */
    public $effectiveStart;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var bool
     */
    public $publishNow;

    /**
     * @var string[]
     */
    public $targetRoleCodes;

    /**
     * @var string
     */
    public $targetRoleMode;

    /**
     * @var int[]
     */
    public $targetTenantIds;

    /**
     * @var string
     */
    public $targetTenantMode;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'content',
        'displayPage' => 'displayPage',
        'displayType' => 'displayType',
        'effectiveEnd' => 'effectiveEnd',
        'effectiveStart' => 'effectiveStart',
        'priority' => 'priority',
        'publishNow' => 'publishNow',
        'targetRoleCodes' => 'targetRoleCodes',
        'targetRoleMode' => 'targetRoleMode',
        'targetTenantIds' => 'targetTenantIds',
        'targetTenantMode' => 'targetTenantMode',
        'tenantId' => 'tenantId',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->targetRoleCodes)) {
            Model::validateArray($this->targetRoleCodes);
        }
        if (\is_array($this->targetTenantIds)) {
            Model::validateArray($this->targetTenantIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->displayPage) {
            $res['displayPage'] = $this->displayPage;
        }

        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }

        if (null !== $this->effectiveEnd) {
            $res['effectiveEnd'] = $this->effectiveEnd;
        }

        if (null !== $this->effectiveStart) {
            $res['effectiveStart'] = $this->effectiveStart;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->publishNow) {
            $res['publishNow'] = $this->publishNow;
        }

        if (null !== $this->targetRoleCodes) {
            if (\is_array($this->targetRoleCodes)) {
                $res['targetRoleCodes'] = [];
                $n1 = 0;
                foreach ($this->targetRoleCodes as $item1) {
                    $res['targetRoleCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetRoleMode) {
            $res['targetRoleMode'] = $this->targetRoleMode;
        }

        if (null !== $this->targetTenantIds) {
            if (\is_array($this->targetTenantIds)) {
                $res['targetTenantIds'] = [];
                $n1 = 0;
                foreach ($this->targetTenantIds as $item1) {
                    $res['targetTenantIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetTenantMode) {
            $res['targetTenantMode'] = $this->targetTenantMode;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['displayPage'])) {
            $model->displayPage = $map['displayPage'];
        }

        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }

        if (isset($map['effectiveEnd'])) {
            $model->effectiveEnd = $map['effectiveEnd'];
        }

        if (isset($map['effectiveStart'])) {
            $model->effectiveStart = $map['effectiveStart'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['publishNow'])) {
            $model->publishNow = $map['publishNow'];
        }

        if (isset($map['targetRoleCodes'])) {
            if (!empty($map['targetRoleCodes'])) {
                $model->targetRoleCodes = [];
                $n1 = 0;
                foreach ($map['targetRoleCodes'] as $item1) {
                    $model->targetRoleCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['targetRoleMode'])) {
            $model->targetRoleMode = $map['targetRoleMode'];
        }

        if (isset($map['targetTenantIds'])) {
            if (!empty($map['targetTenantIds'])) {
                $model->targetTenantIds = [];
                $n1 = 0;
                foreach ($map['targetTenantIds'] as $item1) {
                    $model->targetTenantIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['targetTenantMode'])) {
            $model->targetTenantMode = $map['targetTenantMode'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
