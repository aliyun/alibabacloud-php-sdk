<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\essParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\fcParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\mnsParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\pagerDutyParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\slsParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\webhookParam;

class alertActions extends Model
{
    /**
     * @var string
     */
    public $alertActionId;

    /**
     * @var string
     */
    public $alertActionName;

    /**
     * @var essParam
     */
    public $essParam;

    /**
     * @var fcParam
     */
    public $fcParam;

    /**
     * @var mnsParam
     */
    public $mnsParam;

    /**
     * @var pagerDutyParam
     */
    public $pagerDutyParam;

    /**
     * @var slsParam
     */
    public $slsParam;

    /**
     * @var string
     */
    public $type;

    /**
     * @var webhookParam
     */
    public $webhookParam;
    protected $_name = [
        'alertActionId' => 'alertActionId',
        'alertActionName' => 'alertActionName',
        'essParam' => 'essParam',
        'fcParam' => 'fcParam',
        'mnsParam' => 'mnsParam',
        'pagerDutyParam' => 'pagerDutyParam',
        'slsParam' => 'slsParam',
        'type' => 'type',
        'webhookParam' => 'webhookParam',
    ];

    public function validate()
    {
        if (null !== $this->essParam) {
            $this->essParam->validate();
        }
        if (null !== $this->fcParam) {
            $this->fcParam->validate();
        }
        if (null !== $this->mnsParam) {
            $this->mnsParam->validate();
        }
        if (null !== $this->pagerDutyParam) {
            $this->pagerDutyParam->validate();
        }
        if (null !== $this->slsParam) {
            $this->slsParam->validate();
        }
        if (null !== $this->webhookParam) {
            $this->webhookParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertActionId) {
            $res['alertActionId'] = $this->alertActionId;
        }

        if (null !== $this->alertActionName) {
            $res['alertActionName'] = $this->alertActionName;
        }

        if (null !== $this->essParam) {
            $res['essParam'] = null !== $this->essParam ? $this->essParam->toArray($noStream) : $this->essParam;
        }

        if (null !== $this->fcParam) {
            $res['fcParam'] = null !== $this->fcParam ? $this->fcParam->toArray($noStream) : $this->fcParam;
        }

        if (null !== $this->mnsParam) {
            $res['mnsParam'] = null !== $this->mnsParam ? $this->mnsParam->toArray($noStream) : $this->mnsParam;
        }

        if (null !== $this->pagerDutyParam) {
            $res['pagerDutyParam'] = null !== $this->pagerDutyParam ? $this->pagerDutyParam->toArray($noStream) : $this->pagerDutyParam;
        }

        if (null !== $this->slsParam) {
            $res['slsParam'] = null !== $this->slsParam ? $this->slsParam->toArray($noStream) : $this->slsParam;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->webhookParam) {
            $res['webhookParam'] = null !== $this->webhookParam ? $this->webhookParam->toArray($noStream) : $this->webhookParam;
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
        if (isset($map['alertActionId'])) {
            $model->alertActionId = $map['alertActionId'];
        }

        if (isset($map['alertActionName'])) {
            $model->alertActionName = $map['alertActionName'];
        }

        if (isset($map['essParam'])) {
            $model->essParam = essParam::fromMap($map['essParam']);
        }

        if (isset($map['fcParam'])) {
            $model->fcParam = fcParam::fromMap($map['fcParam']);
        }

        if (isset($map['mnsParam'])) {
            $model->mnsParam = mnsParam::fromMap($map['mnsParam']);
        }

        if (isset($map['pagerDutyParam'])) {
            $model->pagerDutyParam = pagerDutyParam::fromMap($map['pagerDutyParam']);
        }

        if (isset($map['slsParam'])) {
            $model->slsParam = slsParam::fromMap($map['slsParam']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['webhookParam'])) {
            $model->webhookParam = webhookParam::fromMap($map['webhookParam']);
        }

        return $model;
    }
}
