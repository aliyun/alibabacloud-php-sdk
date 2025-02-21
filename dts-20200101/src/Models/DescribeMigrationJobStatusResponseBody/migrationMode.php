<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody;

use AlibabaCloud\Dara\Model;

class migrationMode extends Model
{
    /**
     * @var bool
     */
    public $dataInitialization;
    /**
     * @var bool
     */
    public $dataSynchronization;
    /**
     * @var bool
     */
    public $structureInitialization;
    protected $_name = [
        'dataInitialization'      => 'dataInitialization',
        'dataSynchronization'     => 'dataSynchronization',
        'structureInitialization' => 'structureInitialization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInitialization) {
            $res['dataInitialization'] = $this->dataInitialization;
        }

        if (null !== $this->dataSynchronization) {
            $res['dataSynchronization'] = $this->dataSynchronization;
        }

        if (null !== $this->structureInitialization) {
            $res['structureInitialization'] = $this->structureInitialization;
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
        if (isset($map['dataInitialization'])) {
            $model->dataInitialization = $map['dataInitialization'];
        }

        if (isset($map['dataSynchronization'])) {
            $model->dataSynchronization = $map['dataSynchronization'];
        }

        if (isset($map['structureInitialization'])) {
            $model->structureInitialization = $map['structureInitialization'];
        }

        return $model;
    }
}
