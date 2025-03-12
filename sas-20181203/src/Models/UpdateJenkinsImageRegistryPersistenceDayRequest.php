<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateJenkinsImageRegistryPersistenceDayRequest extends Model
{
    /**
     * @description The retention period. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $persistenceDay;

    /**
     * @description The ID of the image repository.
     *
     * > You can call the [PageImageRegistry](~~PageImageRegistry~~) operation to query the IDs of image repositories.
     * @example 25363
     *
     * @var int
     */
    public $registryId;

    /**
     * @description The source IP address of the request.
     *
     * @example 106.11.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'persistenceDay' => 'PersistenceDay',
        'registryId'     => 'RegistryId',
        'sourceIp'       => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->persistenceDay) {
            $res['PersistenceDay'] = $this->persistenceDay;
        }
        if (null !== $this->registryId) {
            $res['RegistryId'] = $this->registryId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJenkinsImageRegistryPersistenceDayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PersistenceDay'])) {
            $model->persistenceDay = $map['PersistenceDay'];
        }
        if (isset($map['RegistryId'])) {
            $model->registryId = $map['RegistryId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
