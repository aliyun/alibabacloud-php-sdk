<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateJenkinsImageRegistryNameRequest extends Model
{
    /**
     * @var int
     */
    public $registryId;
    /**
     * @var string
     */
    public $registryName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
