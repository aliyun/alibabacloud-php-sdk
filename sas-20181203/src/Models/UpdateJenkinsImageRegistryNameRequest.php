<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateJenkinsImageRegistryNameRequest extends Model
{
    /**
     * @description The ID of the image repository.
     *
     * > You can call the [PageImageRegistry](~~PageImageRegistry~~) operation to query the IDs of image repositories.
     * @example 25090
     *
     * @var int
     */
    public $registryId;

    /**
     * @description The name of the image repository.
     *
     * @example a0603tk1
     *
     * @var string
     */
    public $registryName;

    /**
     * @description The source IP address of the request.
     *
     * @example 121.33.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'registryId'   => 'RegistryId',
        'registryName' => 'RegistryName',
        'sourceIp'     => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registryId) {
            $res['RegistryId'] = $this->registryId;
        }
        if (null !== $this->registryName) {
            $res['RegistryName'] = $this->registryName;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJenkinsImageRegistryNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistryId'])) {
            $model->registryId = $map['RegistryId'];
        }
        if (isset($map['RegistryName'])) {
            $model->registryName = $map['RegistryName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
