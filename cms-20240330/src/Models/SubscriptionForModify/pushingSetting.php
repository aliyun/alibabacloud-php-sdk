<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\SubscriptionForModify;

use AlibabaCloud\Dara\Model;

class pushingSetting extends Model
{
    /**
     * @var string[]
     */
    public $alertActionIds;

    /**
     * @var string
     */
    public $responsePlanId;

    /**
     * @var string[]
     */
    public $restoreActionIds;

    /**
     * @var string
     */
    public $templateUuid;
    protected $_name = [
        'alertActionIds' => 'alertActionIds',
        'responsePlanId' => 'responsePlanId',
        'restoreActionIds' => 'restoreActionIds',
        'templateUuid' => 'templateUuid',
    ];

    public function validate()
    {
        if (\is_array($this->alertActionIds)) {
            Model::validateArray($this->alertActionIds);
        }
        if (\is_array($this->restoreActionIds)) {
            Model::validateArray($this->restoreActionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertActionIds) {
            if (\is_array($this->alertActionIds)) {
                $res['alertActionIds'] = [];
                $n1 = 0;
                foreach ($this->alertActionIds as $item1) {
                    $res['alertActionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->responsePlanId) {
            $res['responsePlanId'] = $this->responsePlanId;
        }

        if (null !== $this->restoreActionIds) {
            if (\is_array($this->restoreActionIds)) {
                $res['restoreActionIds'] = [];
                $n1 = 0;
                foreach ($this->restoreActionIds as $item1) {
                    $res['restoreActionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->templateUuid) {
            $res['templateUuid'] = $this->templateUuid;
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
        if (isset($map['alertActionIds'])) {
            if (!empty($map['alertActionIds'])) {
                $model->alertActionIds = [];
                $n1 = 0;
                foreach ($map['alertActionIds'] as $item1) {
                    $model->alertActionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['responsePlanId'])) {
            $model->responsePlanId = $map['responsePlanId'];
        }

        if (isset($map['restoreActionIds'])) {
            if (!empty($map['restoreActionIds'])) {
                $model->restoreActionIds = [];
                $n1 = 0;
                foreach ($map['restoreActionIds'] as $item1) {
                    $model->restoreActionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['templateUuid'])) {
            $model->templateUuid = $map['templateUuid'];
        }

        return $model;
    }
}
