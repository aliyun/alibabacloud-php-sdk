<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class SendMessageShrinkRequest extends Model
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
     * @var string
     */
    public $msisdnsShrink;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'apiProduct'           => 'ApiProduct',
        'messageSendTime'      => 'MessageSendTime',
        'messageTemplateId'    => 'MessageTemplateId',
        'messageVariableParam' => 'MessageVariableParam',
        'msisdnsShrink'        => 'Msisdns',
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
        if (null !== $this->msisdnsShrink) {
            $res['Msisdns'] = $this->msisdnsShrink;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageShrinkRequest
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
            $model->msisdnsShrink = $map['Msisdns'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
