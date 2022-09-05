<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts;

use AlibabaCloud\Tea\Model;

class alertEvents extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $generatorURL;

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
    public $labels;

    /**
     * @var string
     */
    public $receiveTime;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'alertName'       => 'AlertName',
        'annotations'     => 'Annotations',
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'generatorURL'    => 'GeneratorURL',
        'integrationName' => 'IntegrationName',
        'integrationType' => 'IntegrationType',
        'labels'          => 'Labels',
        'receiveTime'     => 'ReceiveTime',
        'severity'        => 'Severity',
        'startTime'       => 'StartTime',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->generatorURL) {
            $res['GeneratorURL'] = $this->generatorURL;
        }
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->receiveTime) {
            $res['ReceiveTime'] = $this->receiveTime;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GeneratorURL'])) {
            $model->generatorURL = $map['GeneratorURL'];
        }
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['ReceiveTime'])) {
            $model->receiveTime = $map['ReceiveTime'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
