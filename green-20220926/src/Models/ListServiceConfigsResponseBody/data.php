<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf;

class data extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $copyFrom;

    /**
     * @var customServiceConf
     */
    public $customServiceConf;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var mixed[]
     */
    public $option;

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
    public $serviceDesc;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $useStatus;
    protected $_name = [
        'classify' => 'Classify',
        'copyFrom' => 'CopyFrom',
        'customServiceConf' => 'CustomServiceConf',
        'gmtModified' => 'GmtModified',
        'option' => 'Option',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'serviceDesc' => 'ServiceDesc',
        'serviceName' => 'ServiceName',
        'serviceType' => 'ServiceType',
        'uid' => 'Uid',
        'useStatus' => 'UseStatus',
    ];

    public function validate()
    {
        if (null !== $this->customServiceConf) {
            $this->customServiceConf->validate();
        }
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->copyFrom) {
            $res['CopyFrom'] = $this->copyFrom;
        }

        if (null !== $this->customServiceConf) {
            $res['CustomServiceConf'] = null !== $this->customServiceConf ? $this->customServiceConf->toArray($noStream) : $this->customServiceConf;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->option) {
            if (\is_array($this->option)) {
                $res['Option'] = [];
                foreach ($this->option as $key1 => $value1) {
                    $res['Option'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceDesc) {
            $res['ServiceDesc'] = $this->serviceDesc;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->useStatus) {
            $res['UseStatus'] = $this->useStatus;
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
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['CopyFrom'])) {
            $model->copyFrom = $map['CopyFrom'];
        }

        if (isset($map['CustomServiceConf'])) {
            $model->customServiceConf = customServiceConf::fromMap($map['CustomServiceConf']);
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                foreach ($map['Option'] as $key1 => $value1) {
                    $model->option[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['ServiceDesc'])) {
            $model->serviceDesc = $map['ServiceDesc'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UseStatus'])) {
            $model->useStatus = $map['UseStatus'];
        }

        return $model;
    }
}
