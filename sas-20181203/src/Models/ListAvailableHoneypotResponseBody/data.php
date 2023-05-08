<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAvailableHoneypotResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The display name of the image that is used for the honeypot.
     *
     * @example RuoYi
     *
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @description The ID of the image that is used for the honeypot.
     *
     * @example sha256:007095d6de9c7a343e9fc1f74a7efc9c5de9d5454789d2fa505a1b3fc62****
     *
     * @var string
     */
    public $honeypotImageId;

    /**
     * @description The name of the image that is used for the honeypot.
     *
     * @example ruoyi
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The type of the image that is used for the honeypot.
     *
     * @example Web
     *
     * @var string
     */
    public $honeypotImageType;

    /**
     * @description The version of the image that is used for the honeypot.
     *
     * @example 1.0.2
     *
     * @var string
     */
    public $honeypotImageVersion;

    /**
     * @description The port that is supported by the honeypot. The value is in the JSON format. The value contains the following fields:
     *
     *   **log_type**: the log type
     *   **proto**: the supported protocol
     *   **description**: the description
     *   **ports**: the supported ports
     *   **port_str**: the supported port number of the string type
     *   **type**: the type
     *
     * @example [{"log_type":"web","proto":"tcp","description":"webServerPort","ports":[80.0],"port_str":"80","type":"web"}]
     *
     * @var string
     */
    public $multiports;

    /**
     * @description The protocol that is supported by the honeypot.
     *
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @description The service port of the honeypot.
     *
     * @example 27017.0
     *
     * @var string
     */
    public $servicePort;

    /**
     * @description The configuration template of the honeypot.
     *
     * @example {}
     *
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
