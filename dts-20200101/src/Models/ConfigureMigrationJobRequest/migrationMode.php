<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description The database account of the destination database.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $dataIntialization;

    /**
     * @description The password of the destination database account.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description The name of the destination database or the authentication database.
     *
     * >
     *   You must specify the database name only if the **DestinationEndpoint.EngineName** parameter is set to **PostgreSQL**, **DRDS**, or **MongoDB**.
     *   If the **DestinationEndpoint.EngineName** parameter is set to **PostgreSQL** or **DRDS**, specify the name of the destination database. If the DestinationEndpoint.EngineName parameter is set to **MongoDB**, specify the name of the authentication database.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $structureIntialization;
    protected $_name = [
        'dataIntialization'      => 'DataIntialization',
        'dataSynchronization'    => 'DataSynchronization',
        'structureIntialization' => 'StructureIntialization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataIntialization) {
            $res['DataIntialization'] = $this->dataIntialization;
        }
        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }
        if (null !== $this->structureIntialization) {
            $res['StructureIntialization'] = $this->structureIntialization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationMode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataIntialization'])) {
            $model->dataIntialization = $map['DataIntialization'];
        }
        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }
        if (isset($map['StructureIntialization'])) {
            $model->structureIntialization = $map['StructureIntialization'];
        }

        return $model;
    }
}
