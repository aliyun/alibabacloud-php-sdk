<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies\qosPolicy\dpiGroupIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies\qosPolicy\dpiSignatureIds;
use AlibabaCloud\Tea\Model;

class qosPolicy extends Model
{
    /**
     * @var dpiSignatureIds
     */
    public $dpiSignatureIds;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var string
     */
    public $qosPolicyId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var dpiGroupIds
     */
    public $dpiGroupIds;
    protected $_name = [
        'dpiSignatureIds' => 'DpiSignatureIds',
        'ipProtocol'      => 'IpProtocol',
        'qosId'           => 'QosId',
        'priority'        => 'Priority',
        'endTime'         => 'EndTime',
        'startTime'       => 'StartTime',
        'description'     => 'Description',
        'destCidr'        => 'DestCidr',
        'destPortRange'   => 'DestPortRange',
        'qosPolicyId'     => 'QosPolicyId',
        'name'            => 'Name',
        'sourceCidr'      => 'SourceCidr',
        'sourcePortRange' => 'SourcePortRange',
        'dpiGroupIds'     => 'DpiGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = null !== $this->dpiSignatureIds ? $this->dpiSignatureIds->toMap() : null;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }
        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }
        if (null !== $this->qosPolicyId) {
            $res['QosPolicyId'] = $this->qosPolicyId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->dpiGroupIds) {
            $res['DpiGroupIds'] = null !== $this->dpiGroupIds ? $this->dpiGroupIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DpiSignatureIds'])) {
            $model->dpiSignatureIds = dpiSignatureIds::fromMap($map['DpiSignatureIds']);
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }
        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }
        if (isset($map['QosPolicyId'])) {
            $model->qosPolicyId = $map['QosPolicyId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['DpiGroupIds'])) {
            $model->dpiGroupIds = dpiGroupIds::fromMap($map['DpiGroupIds']);
        }

        return $model;
    }
}
