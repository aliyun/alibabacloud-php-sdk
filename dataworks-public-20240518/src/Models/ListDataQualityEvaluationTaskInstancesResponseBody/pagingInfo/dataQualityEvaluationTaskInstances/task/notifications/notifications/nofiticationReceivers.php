<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task\notifications\notifications;

use AlibabaCloud\Tea\Model;

class nofiticationReceivers extends Model
{
    /**
     * @description 扩展信息，格式为 json，例如钉钉机器人支持 at 所有人
     *
     * @example {"atAll":"true"}
     *
     * @var string
     */
    public $extension;

    /**
     * @description 告警接收人类型
     *
     * @example AliUid
     *
     * @var string
     */
    public $receiverType;

    /**
     * @description 告警接收人
     *
     * @var string[]
     */
    public $receiverValues;
    protected $_name = [
        'extension'      => 'Extension',
        'receiverType'   => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }
        if (null !== $this->receiverValues) {
            $res['ReceiverValues'] = $this->receiverValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nofiticationReceivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }
        if (isset($map['ReceiverValues'])) {
            if (!empty($map['ReceiverValues'])) {
                $model->receiverValues = $map['ReceiverValues'];
            }
        }

        return $model;
    }
}
