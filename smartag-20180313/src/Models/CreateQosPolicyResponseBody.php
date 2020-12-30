<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosPolicyResponseBody\dpiGroupIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosPolicyResponseBody\dpiSignatureIds;
use AlibabaCloud\Tea\Model;

class CreateQosPolicyResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var string
     */
    public $qosPolicyId;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var dpiGroupIds
     */
    public $dpiGroupIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var dpiSignatureIds
     */
    public $dpiSignatureIds;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $ipProtocol;
    protected $_name = [
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'requestId'       => 'RequestId',
        'qosPolicyId'     => 'QosPolicyId',
        'sourcePortRange' => 'SourcePortRange',
        'sourceCidr'      => 'SourceCidr',
        'priority'        => 'Priority',
        'startTime'       => 'StartTime',
        'destPortRange'   => 'DestPortRange',
        'dpiGroupIds'     => 'DpiGroupIds',
        'name'            => 'Name',
        'destCidr'        => 'DestCidr',
        'dpiSignatureIds' => 'DpiSignatureIds',
        'qosId'           => 'QosId',
        'ipProtocol'      => 'IpProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->qosPolicyId) {
            $res['QosPolicyId'] = $this->qosPolicyId;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }
        if (null !== $this->dpiGroupIds) {
            $res['DpiGroupIds'] = null !== $this->dpiGroupIds ? $this->dpiGroupIds->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }
        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = null !== $this->dpiSignatureIds ? $this->dpiSignatureIds->toMap() : null;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQosPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QosPolicyId'])) {
            $model->qosPolicyId = $map['QosPolicyId'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }
        if (isset($map['DpiGroupIds'])) {
            $model->dpiGroupIds = dpiGroupIds::fromMap($map['DpiGroupIds']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }
        if (isset($map['DpiSignatureIds'])) {
            $model->dpiSignatureIds = dpiSignatureIds::fromMap($map['DpiSignatureIds']);
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        return $model;
    }
}
