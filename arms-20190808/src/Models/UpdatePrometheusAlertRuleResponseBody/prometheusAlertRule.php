<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleResponseBody\prometheusAlertRule\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleResponseBody\prometheusAlertRule\labels;

class prometheusAlertRule extends Model
{
    /**
     * @var int
     */
    public $alertId;
    /**
     * @var string
     */
    public $alertName;
    /**
     * @var annotations[]
     */
    public $annotations;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $dispatchRuleId;
    /**
     * @var string
     */
    public $duration;
    /**
     * @var string
     */
    public $expression;
    /**
     * @var labels[]
     */
    public $labels;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $notifyType;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertId'        => 'AlertId',
        'alertName'      => 'AlertName',
        'annotations'    => 'Annotations',
        'clusterId'      => 'ClusterId',
        'dispatchRuleId' => 'DispatchRuleId',
        'duration'       => 'Duration',
        'expression'     => 'Expression',
        'labels'         => 'Labels',
        'message'        => 'Message',
        'notifyType'     => 'NotifyType',
        'status'         => 'Status',
        'type'           => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }

        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['Annotations'] = [];
                $n1                 = 0;
                foreach ($this->annotations as $item1) {
                    $res['Annotations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }

        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n1                 = 0;
                foreach ($map['Annotations'] as $item1) {
                    $model->annotations[$n1++] = annotations::fromMap($item1);
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
