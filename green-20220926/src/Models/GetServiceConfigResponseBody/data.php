<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody\data\customServiceConf;

class data extends Model
{
    /**
     * @var customServiceConf
     */
    public $customServiceConf;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'customServiceConf' => 'CustomServiceConf',
        'gmtModified' => 'GmtModified',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (null !== $this->customServiceConf) {
            $this->customServiceConf->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customServiceConf) {
            $res['CustomServiceConf'] = null !== $this->customServiceConf ? $this->customServiceConf->toArray($noStream) : $this->customServiceConf;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['CustomServiceConf'])) {
            $model->customServiceConf = customServiceConf::fromMap($map['CustomServiceConf']);
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
