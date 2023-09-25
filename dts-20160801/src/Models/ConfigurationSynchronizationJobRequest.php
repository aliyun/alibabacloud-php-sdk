<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\SDK\Dts\V20160801\Models\ConfigurationSynchronizationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20160801\Models\ConfigurationSynchronizationJobRequest\initialization;
use AlibabaCloud\SDK\Dts\V20160801\Models\ConfigurationSynchronizationJobRequest\sourceEndpoint;
use AlibabaCloud\Tea\Model;

class ConfigurationSynchronizationJobRequest extends Model
{
    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var initialization
     */
    public $initialization;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @var string
     */
    public $synchronizationJobName;

    /**
     * @var string
     */
    public $synchronizationObject;
    protected $_name = [
        'destinationEndpoint'    => 'DestinationEndpoint',
        'initialization'         => 'Initialization',
        'sourceEndpoint'         => 'SourceEndpoint',
        'ownerId'                => 'OwnerId',
        'synchronizationJobId'   => 'SynchronizationJobId',
        'synchronizationJobName' => 'SynchronizationJobName',
        'synchronizationObject'  => 'SynchronizationObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->initialization) {
            $res['Initialization'] = null !== $this->initialization ? $this->initialization->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }
        if (null !== $this->synchronizationJobName) {
            $res['SynchronizationJobName'] = $this->synchronizationJobName;
        }
        if (null !== $this->synchronizationObject) {
            $res['SynchronizationObject'] = $this->synchronizationObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigurationSynchronizationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['Initialization'])) {
            $model->initialization = initialization::fromMap($map['Initialization']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }
        if (isset($map['SynchronizationJobName'])) {
            $model->synchronizationJobName = $map['SynchronizationJobName'];
        }
        if (isset($map['SynchronizationObject'])) {
            $model->synchronizationObject = $map['SynchronizationObject'];
        }

        return $model;
    }
}
