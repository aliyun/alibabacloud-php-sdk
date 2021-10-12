<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpdateDBInstanceSSLRequest extends Model
{
    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enableSSL'      => 'EnableSSL',
        'certCommonName' => 'CertCommonName',
        'DBInstanceName' => 'DBInstanceName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDBInstanceSSLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
