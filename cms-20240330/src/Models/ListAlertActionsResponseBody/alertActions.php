<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody;

use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\essParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\fcParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\mnsParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\pagerDutyParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\slsParam;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions\webhookParam;
use AlibabaCloud\Tea\Model;

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
        'alertActionId'   => 'alertActionId',
        'alertActionName' => 'alertActionName',
        'essParam'        => 'essParam',
        'fcParam'         => 'fcParam',
        'mnsParam'        => 'mnsParam',
        'pagerDutyParam'  => 'pagerDutyParam',
        'slsParam'        => 'slsParam',
        'type'            => 'type',
        'webhookParam'    => 'webhookParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertActionId) {
            $res['alertActionId'] = $this->alertActionId;
        }
        if (null !== $this->alertActionName) {
            $res['alertActionName'] = $this->alertActionName;
        }
        if (null !== $this->essParam) {
            $res['essParam'] = null !== $this->essParam ? $this->essParam->toMap() : null;
        }
        if (null !== $this->fcParam) {
            $res['fcParam'] = null !== $this->fcParam ? $this->fcParam->toMap() : null;
        }
        if (null !== $this->mnsParam) {
            $res['mnsParam'] = null !== $this->mnsParam ? $this->mnsParam->toMap() : null;
        }
        if (null !== $this->pagerDutyParam) {
            $res['pagerDutyParam'] = null !== $this->pagerDutyParam ? $this->pagerDutyParam->toMap() : null;
        }
        if (null !== $this->slsParam) {
            $res['slsParam'] = null !== $this->slsParam ? $this->slsParam->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->webhookParam) {
            $res['webhookParam'] = null !== $this->webhookParam ? $this->webhookParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertActions
     */
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
