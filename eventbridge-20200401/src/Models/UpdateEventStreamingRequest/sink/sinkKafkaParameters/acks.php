<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters;

use AlibabaCloud\Tea\Model;

class acks extends Model
{
    /**
     * @description The method that you want to use to transform events. Default value: CONSTANT.
     *
     * @example CONSTANT
     *
     * @var string
     */
    public $form;

    /**
     * @description None.
     *
     * @var string
     */
    public $template;

    /**
     * @description The ACK mode.
     *
     *   If you set this parameter to 0, no response is returned from the broker. In this mode, the performance is high, but the risk of data loss is also high.
     *   If you set this parameter to 1, a response is returned when data is written to the leader. In this mode, the performance and the risk of data loss are moderate. Data loss may occur if a failure occurs on the leader.
     *   If you set this parameter to all, a response is returned when data is written to the leader and synchronized to the followers. In this mode, the performance is low, but the risk of data loss is also low. Data loss occurs if the leader and the followers fail at the same time.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'form'     => 'Form',
        'template' => 'Template',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
