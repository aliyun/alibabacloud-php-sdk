<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody;

use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody\data\customServiceConf;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var customServiceConf
     */
    public $customServiceConf;

    /**
     * @example 2024-05-06 03:07:44
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example text
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example nickname_detection
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description UID。
     *
     * @example 165379****31937
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'customServiceConf' => 'CustomServiceConf',
        'gmtModified'       => 'GmtModified',
        'resourceType'      => 'ResourceType',
        'serviceCode'       => 'ServiceCode',
        'uid'               => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customServiceConf) {
            $res['CustomServiceConf'] = null !== $this->customServiceConf ? $this->customServiceConf->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
