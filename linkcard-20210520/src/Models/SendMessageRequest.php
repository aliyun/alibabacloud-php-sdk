<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @description Linkcard
     *
     * @example Linkcard
     *
     * @var string
     */
    public $apiProduct;

    /**
     * @example 1694401634
     *
     * @var int
     */
    public $messageSendTime;

    /**
     * @example 14
     *
     * @var int
     */
    public $messageTemplateId;

    /**
     * @var string
     */
    public $messageVariableParam;

    /**
     * @var string[]
     */
    public $msisdns;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'apiProduct'           => 'ApiProduct',
        'messageSendTime'      => 'MessageSendTime',
        'messageTemplateId'    => 'MessageTemplateId',
        'messageVariableParam' => 'MessageVariableParam',
        'msisdns'              => 'Msisdns',
        'taskName'             => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->messageSendTime) {
            $res['MessageSendTime'] = $this->messageSendTime;
        }
        if (null !== $this->messageTemplateId) {
            $res['MessageTemplateId'] = $this->messageTemplateId;
        }
        if (null !== $this->messageVariableParam) {
            $res['MessageVariableParam'] = $this->messageVariableParam;
        }
        if (null !== $this->msisdns) {
            $res['Msisdns'] = $this->msisdns;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['MessageSendTime'])) {
            $model->messageSendTime = $map['MessageSendTime'];
        }
        if (isset($map['MessageTemplateId'])) {
            $model->messageTemplateId = $map['MessageTemplateId'];
        }
        if (isset($map['MessageVariableParam'])) {
            $model->messageVariableParam = $map['MessageVariableParam'];
        }
        if (isset($map['Msisdns'])) {
            if (!empty($map['Msisdns'])) {
                $model->msisdns = $map['Msisdns'];
            }
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
