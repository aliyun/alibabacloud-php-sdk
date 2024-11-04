<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\SubscriptionForView;

use AlibabaCloud\Tea\Model;

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
        'alertActionIds'   => 'alertActionIds',
        'responsePlanId'   => 'responsePlanId',
        'restoreActionIds' => 'restoreActionIds',
        'templateUuid'     => 'templateUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertActionIds) {
            $res['alertActionIds'] = $this->alertActionIds;
        }
        if (null !== $this->responsePlanId) {
            $res['responsePlanId'] = $this->responsePlanId;
        }
        if (null !== $this->restoreActionIds) {
            $res['restoreActionIds'] = $this->restoreActionIds;
        }
        if (null !== $this->templateUuid) {
            $res['templateUuid'] = $this->templateUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushingSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertActionIds'])) {
            if (!empty($map['alertActionIds'])) {
                $model->alertActionIds = $map['alertActionIds'];
            }
        }
        if (isset($map['responsePlanId'])) {
            $model->responsePlanId = $map['responsePlanId'];
        }
        if (isset($map['restoreActionIds'])) {
            if (!empty($map['restoreActionIds'])) {
                $model->restoreActionIds = $map['restoreActionIds'];
            }
        }
        if (isset($map['templateUuid'])) {
            $model->templateUuid = $map['templateUuid'];
        }

        return $model;
    }
}
