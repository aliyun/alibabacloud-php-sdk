<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;

class UpdateEgressProxyIpPoolAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $egressProxyIpPoolId;

    /**
     * @var string
     */
    public $egressProxyIpPoolName;

    /**
     * @var string
     */
    public $hashFactor;

    /**
     * @var string
     */
    public $hashHeaderName;

    /**
     * @var string
     */
    public $scheduler;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'egressProxyIpPoolId' => 'EgressProxyIpPoolId',
        'egressProxyIpPoolName' => 'EgressProxyIpPoolName',
        'hashFactor' => 'HashFactor',
        'hashHeaderName' => 'HashHeaderName',
        'scheduler' => 'Scheduler',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressProxyIpPoolId) {
            $res['EgressProxyIpPoolId'] = $this->egressProxyIpPoolId;
        }

        if (null !== $this->egressProxyIpPoolName) {
            $res['EgressProxyIpPoolName'] = $this->egressProxyIpPoolName;
        }

        if (null !== $this->hashFactor) {
            $res['HashFactor'] = $this->hashFactor;
        }

        if (null !== $this->hashHeaderName) {
            $res['HashHeaderName'] = $this->hashHeaderName;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressProxyIpPoolId'])) {
            $model->egressProxyIpPoolId = $map['EgressProxyIpPoolId'];
        }

        if (isset($map['EgressProxyIpPoolName'])) {
            $model->egressProxyIpPoolName = $map['EgressProxyIpPoolName'];
        }

        if (isset($map['HashFactor'])) {
            $model->hashFactor = $map['HashFactor'];
        }

        if (isset($map['HashHeaderName'])) {
            $model->hashHeaderName = $map['HashHeaderName'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        return $model;
    }
}
