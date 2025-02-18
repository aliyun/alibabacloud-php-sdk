<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class UpdateDBInstanceSSLRequest extends Model
{
    /**
     * @var string
     */
    public $certCommonName;
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var bool
     */
    public $enableSSL;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'DBInstanceName' => 'DBInstanceName',
        'enableSSL'      => 'EnableSSL',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
