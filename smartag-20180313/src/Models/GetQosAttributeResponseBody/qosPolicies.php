<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class qosPolicies extends Model
{
    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $qosPolicieDescription;

    /**
     * @var string
     */
    public $qosPolicieName;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'destCidr' => 'DestCidr',
        'destPortRange' => 'DestPortRange',
        'endTime' => 'EndTime',
        'ipProtocol' => 'IpProtocol',
        'priority' => 'Priority',
        'qosPolicieDescription' => 'QosPolicieDescription',
        'qosPolicieName' => 'QosPolicieName',
        'sourceCidr' => 'SourceCidr',
        'sourcePortRange' => 'SourcePortRange',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }

        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->qosPolicieDescription) {
            $res['QosPolicieDescription'] = $this->qosPolicieDescription;
        }

        if (null !== $this->qosPolicieName) {
            $res['QosPolicieName'] = $this->qosPolicieName;
        }

        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }

        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }

        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['QosPolicieDescription'])) {
            $model->qosPolicieDescription = $map['QosPolicieDescription'];
        }

        if (isset($map['QosPolicieName'])) {
            $model->qosPolicieName = $map['QosPolicieName'];
        }

        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
