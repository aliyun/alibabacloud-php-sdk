<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateTransitRouterPolicyBasedRouteRequest extends Model
{
    /**
     * @var string
     */
    public $addressFamily;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var string
     */
    public $destinationCidr;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $dscp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyTableId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $targetRouteTableId;
    protected $_name = [
        'addressFamily' => 'AddressFamily',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'destPortRange' => 'DestPortRange',
        'destinationCidr' => 'DestinationCidr',
        'dryRun' => 'DryRun',
        'dscp' => 'Dscp',
        'name' => 'Name',
        'policyTableId' => 'PolicyTableId',
        'priority' => 'Priority',
        'protocol' => 'Protocol',
        'sourceCidr' => 'SourceCidr',
        'sourcePortRange' => 'SourcePortRange',
        'targetRouteTableId' => 'TargetRouteTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressFamily) {
            $res['AddressFamily'] = $this->addressFamily;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }

        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->dscp) {
            $res['Dscp'] = $this->dscp;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyTableId) {
            $res['PolicyTableId'] = $this->policyTableId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }

        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        if (null !== $this->targetRouteTableId) {
            $res['TargetRouteTableId'] = $this->targetRouteTableId;
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
        if (isset($map['AddressFamily'])) {
            $model->addressFamily = $map['AddressFamily'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }

        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Dscp'])) {
            $model->dscp = $map['Dscp'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PolicyTableId'])) {
            $model->policyTableId = $map['PolicyTableId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        if (isset($map['TargetRouteTableId'])) {
            $model->targetRouteTableId = $map['TargetRouteTableId'];
        }

        return $model;
    }
}
