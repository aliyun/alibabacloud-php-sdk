<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleRequest\tags;

class UpdatePrometheusAlertRuleRequest extends Model
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
     * @var string
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
     * @var string
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
     * @var string
     */
    public $regionId;
    /**
     * @var tags[]
     */
    public $tags;
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
        'regionId'       => 'RegionId',
        'tags'           => 'Tags',
        'type'           => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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
            $res['Annotations'] = $this->annotations;
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
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            $model->annotations = $map['Annotations'];
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
            $model->labels = $map['Labels'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
