<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ConfigADConnectorTrustRequest extends Model
{
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var bool
     */
    public $rdsLicenseDomain;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $trustKey;
    protected $_name = [
        'officeSiteId'     => 'OfficeSiteId',
        'rdsLicenseDomain' => 'RdsLicenseDomain',
        'regionId'         => 'RegionId',
        'trustKey'         => 'TrustKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->rdsLicenseDomain) {
            $res['RdsLicenseDomain'] = $this->rdsLicenseDomain;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->trustKey) {
            $res['TrustKey'] = $this->trustKey;
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
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RdsLicenseDomain'])) {
            $model->rdsLicenseDomain = $map['RdsLicenseDomain'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TrustKey'])) {
            $model->trustKey = $map['TrustKey'];
        }

        return $model;
    }
}
