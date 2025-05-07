<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingSolutionFramework\V20230810\Models;

use AlibabaCloud\Dara\Model;

class SendOpsMessageToTerminalRequest extends Model
{
    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $officeRegionId;

    /**
     * @var string
     */
    public $opsAction;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var bool
     */
    public $waitForAck;

    /**
     * @var bool
     */
    public $waitForMsg;
    protected $_name = [
        'messageBody' => 'MessageBody',
        'officeRegionId' => 'OfficeRegionId',
        'opsAction' => 'OpsAction',
        'serialNo' => 'SerialNo',
        'waitForAck' => 'WaitForAck',
        'waitForMsg' => 'WaitForMsg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }

        if (null !== $this->officeRegionId) {
            $res['OfficeRegionId'] = $this->officeRegionId;
        }

        if (null !== $this->opsAction) {
            $res['OpsAction'] = $this->opsAction;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->waitForAck) {
            $res['WaitForAck'] = $this->waitForAck;
        }

        if (null !== $this->waitForMsg) {
            $res['WaitForMsg'] = $this->waitForMsg;
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
        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }

        if (isset($map['OfficeRegionId'])) {
            $model->officeRegionId = $map['OfficeRegionId'];
        }

        if (isset($map['OpsAction'])) {
            $model->opsAction = $map['OpsAction'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['WaitForAck'])) {
            $model->waitForAck = $map['WaitForAck'];
        }

        if (isset($map['WaitForMsg'])) {
            $model->waitForMsg = $map['WaitForMsg'];
        }

        return $model;
    }
}
