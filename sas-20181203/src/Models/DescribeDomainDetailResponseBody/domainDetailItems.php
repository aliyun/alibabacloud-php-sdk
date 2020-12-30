<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class domainDetailItems extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $assetType;
    protected $_name = [
        'uuid'         => 'Uuid',
        'internetIp'   => 'InternetIp',
        'instanceName' => 'InstanceName',
        'instanceId'   => 'InstanceId',
        'intranetIp'   => 'IntranetIp',
        'assetType'    => 'AssetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainDetailItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        return $model;
    }
}
