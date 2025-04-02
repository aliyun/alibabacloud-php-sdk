<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest\serviceList;

class ImportServicesRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $fcAlias;

    /**
     * @var string
     */
    public $fcServiceName;

    /**
     * @var string
     */
    public $fcVersion;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var serviceList[]
     */
    public $serviceList;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $tlsSetting;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'fcAlias' => 'FcAlias',
        'fcServiceName' => 'FcServiceName',
        'fcVersion' => 'FcVersion',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'serviceList' => 'ServiceList',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'tlsSetting' => 'TlsSetting',
    ];

    public function validate()
    {
        if (\is_array($this->serviceList)) {
            Model::validateArray($this->serviceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->fcAlias) {
            $res['FcAlias'] = $this->fcAlias;
        }

        if (null !== $this->fcServiceName) {
            $res['FcServiceName'] = $this->fcServiceName;
        }

        if (null !== $this->fcVersion) {
            $res['FcVersion'] = $this->fcVersion;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->serviceList) {
            if (\is_array($this->serviceList)) {
                $res['ServiceList'] = [];
                $n1 = 0;
                foreach ($this->serviceList as $item1) {
                    $res['ServiceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->tlsSetting) {
            $res['TlsSetting'] = $this->tlsSetting;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['FcAlias'])) {
            $model->fcAlias = $map['FcAlias'];
        }

        if (isset($map['FcServiceName'])) {
            $model->fcServiceName = $map['FcServiceName'];
        }

        if (isset($map['FcVersion'])) {
            $model->fcVersion = $map['FcVersion'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['ServiceList'])) {
            if (!empty($map['ServiceList'])) {
                $model->serviceList = [];
                $n1 = 0;
                foreach ($map['ServiceList'] as $item1) {
                    $model->serviceList[$n1++] = serviceList::fromMap($item1);
                }
            }
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TlsSetting'])) {
            $model->tlsSetting = $map['TlsSetting'];
        }

        return $model;
    }
}
