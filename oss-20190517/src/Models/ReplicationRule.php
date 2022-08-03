<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\ReplicationRule\encryptionConfiguration;
use AlibabaCloud\Tea\Model;

class ReplicationRule extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var ReplicationDestination
     */
    public $destination;

    /**
     * @var encryptionConfiguration
     */
    public $encryptionConfiguration;

    /**
     * @var string
     */
    public $historicalObjectReplication;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var ReplicationPrefixSet
     */
    public $prefixSet;

    /**
     * @var ReplicationSourceSelectionCriteria
     */
    public $sourceSelectionCriteria;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $syncRole;
    protected $_name = [
        'action'                      => 'Action',
        'destination'                 => 'Destination',
        'encryptionConfiguration'     => 'EncryptionConfiguration',
        'historicalObjectReplication' => 'HistoricalObjectReplication',
        'ID'                          => 'ID',
        'prefixSet'                   => 'PrefixSet',
        'sourceSelectionCriteria'     => 'SourceSelectionCriteria',
        'status'                      => 'Status',
        'syncRole'                    => 'SyncRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->destination) {
            $res['Destination'] = null !== $this->destination ? $this->destination->toMap() : null;
        }
        if (null !== $this->encryptionConfiguration) {
            $res['EncryptionConfiguration'] = null !== $this->encryptionConfiguration ? $this->encryptionConfiguration->toMap() : null;
        }
        if (null !== $this->historicalObjectReplication) {
            $res['HistoricalObjectReplication'] = $this->historicalObjectReplication;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->prefixSet) {
            $res['PrefixSet'] = null !== $this->prefixSet ? $this->prefixSet->toMap() : null;
        }
        if (null !== $this->sourceSelectionCriteria) {
            $res['SourceSelectionCriteria'] = null !== $this->sourceSelectionCriteria ? $this->sourceSelectionCriteria->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->syncRole) {
            $res['SyncRole'] = $this->syncRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Destination'])) {
            $model->destination = ReplicationDestination::fromMap($map['Destination']);
        }
        if (isset($map['EncryptionConfiguration'])) {
            $model->encryptionConfiguration = encryptionConfiguration::fromMap($map['EncryptionConfiguration']);
        }
        if (isset($map['HistoricalObjectReplication'])) {
            $model->historicalObjectReplication = $map['HistoricalObjectReplication'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['PrefixSet'])) {
            $model->prefixSet = ReplicationPrefixSet::fromMap($map['PrefixSet']);
        }
        if (isset($map['SourceSelectionCriteria'])) {
            $model->sourceSelectionCriteria = ReplicationSourceSelectionCriteria::fromMap($map['SourceSelectionCriteria']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SyncRole'])) {
            $model->syncRole = $map['SyncRole'];
        }

        return $model;
    }
}
