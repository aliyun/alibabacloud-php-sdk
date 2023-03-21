<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAvailableHoneypotResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @var string
     */
    public $honeypotImageId;

    /**
     * @var string
     */
    public $honeypotImageName;

    /**
     * @var string
     */
    public $honeypotImageType;

    /**
     * @var string
     */
    public $honeypotImageVersion;

    /**
     * @var string
     */
    public $multiports;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $servicePort;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'honeypotImageDisplayName' => 'HoneypotImageDisplayName',
        'honeypotImageId'          => 'HoneypotImageId',
        'honeypotImageName'        => 'HoneypotImageName',
        'honeypotImageType'        => 'HoneypotImageType',
        'honeypotImageVersion'     => 'HoneypotImageVersion',
        'multiports'               => 'Multiports',
        'proto'                    => 'Proto',
        'servicePort'              => 'ServicePort',
        'template'                 => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotImageDisplayName) {
            $res['HoneypotImageDisplayName'] = $this->honeypotImageDisplayName;
        }
        if (null !== $this->honeypotImageId) {
            $res['HoneypotImageId'] = $this->honeypotImageId;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->honeypotImageType) {
            $res['HoneypotImageType'] = $this->honeypotImageType;
        }
        if (null !== $this->honeypotImageVersion) {
            $res['HoneypotImageVersion'] = $this->honeypotImageVersion;
        }
        if (null !== $this->multiports) {
            $res['Multiports'] = $this->multiports;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
        if (isset($map['HoneypotImageDisplayName'])) {
            $model->honeypotImageDisplayName = $map['HoneypotImageDisplayName'];
        }
        if (isset($map['HoneypotImageId'])) {
            $model->honeypotImageId = $map['HoneypotImageId'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['HoneypotImageType'])) {
            $model->honeypotImageType = $map['HoneypotImageType'];
        }
        if (isset($map['HoneypotImageVersion'])) {
            $model->honeypotImageVersion = $map['HoneypotImageVersion'];
        }
        if (isset($map['Multiports'])) {
            $model->multiports = $map['Multiports'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
