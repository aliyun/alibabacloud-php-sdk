<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models\ListActivatedAlertsResponseBody\page;

use AlibabaCloud\SDK\ARMS\V20210519\Models\ListActivatedAlertsResponseBody\page\alerts\dispatchRules;
use AlibabaCloud\Tea\Model;

class alerts extends Model
{
    /**
     * @var string
     */
    public $alertId;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var dispatchRules[]
     */
    public $dispatchRules;

    /**
     * @var int
     */
    public $endsAt;

    /**
     * @var mixed[]
     */
    public $expandFields;

    /**
     * @var string
     */
    public $integrationName;

    /**
     * @var string
     */
    public $integrationType;

    /**
     * @var string
     */
    public $involvedObjectKind;

    /**
     * @var string
     */
    public $involvedObjectName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $startsAt;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alertId'            => 'AlertId',
        'alertName'          => 'AlertName',
        'alertType'          => 'AlertType',
        'count'              => 'Count',
        'createTime'         => 'CreateTime',
        'dispatchRules'      => 'DispatchRules',
        'endsAt'             => 'EndsAt',
        'expandFields'       => 'ExpandFields',
        'integrationName'    => 'IntegrationName',
        'integrationType'    => 'IntegrationType',
        'involvedObjectKind' => 'InvolvedObjectKind',
        'involvedObjectName' => 'InvolvedObjectName',
        'message'            => 'Message',
        'severity'           => 'Severity',
        'startsAt'           => 'StartsAt',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dispatchRules) {
            $res['DispatchRules'] = [];
            if (null !== $this->dispatchRules && \is_array($this->dispatchRules)) {
                $n = 0;
                foreach ($this->dispatchRules as $item) {
                    $res['DispatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endsAt) {
            $res['EndsAt'] = $this->endsAt;
        }
        if (null !== $this->expandFields) {
            $res['ExpandFields'] = $this->expandFields;
        }
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->involvedObjectKind) {
            $res['InvolvedObjectKind'] = $this->involvedObjectKind;
        }
        if (null !== $this->involvedObjectName) {
            $res['InvolvedObjectName'] = $this->involvedObjectName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startsAt) {
            $res['StartsAt'] = $this->startsAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alerts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DispatchRules'])) {
            if (!empty($map['DispatchRules'])) {
                $model->dispatchRules = [];
                $n                    = 0;
                foreach ($map['DispatchRules'] as $item) {
                    $model->dispatchRules[$n++] = null !== $item ? dispatchRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndsAt'])) {
            $model->endsAt = $map['EndsAt'];
        }
        if (isset($map['ExpandFields'])) {
            $model->expandFields = $map['ExpandFields'];
        }
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['InvolvedObjectKind'])) {
            $model->involvedObjectKind = $map['InvolvedObjectKind'];
        }
        if (isset($map['InvolvedObjectName'])) {
            $model->involvedObjectName = $map['InvolvedObjectName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartsAt'])) {
            $model->startsAt = $map['StartsAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
