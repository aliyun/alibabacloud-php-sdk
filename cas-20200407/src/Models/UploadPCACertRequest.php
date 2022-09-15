<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UploadPCACertRequest extends Model
{
    /**
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var int
     */
    public $warehouseId;
    protected $_name = [
        'cert'        => 'Cert',
        'name'        => 'Name',
        'privateKey'  => 'PrivateKey',
        'warehouseId' => 'WarehouseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->warehouseId) {
            $res['WarehouseId'] = $this->warehouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPCACertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['WarehouseId'])) {
            $model->warehouseId = $map['WarehouseId'];
        }

        return $model;
    }
}
