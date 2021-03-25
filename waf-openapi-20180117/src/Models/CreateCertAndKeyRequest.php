<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class CreateCertAndKeyRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $httpsCertName;
    protected $_name = [
        'domain'        => 'Domain',
        'region'        => 'Region',
        'instanceId'    => 'InstanceId',
        'cert'          => 'Cert',
        'key'           => 'Key',
        'httpsCertName' => 'HttpsCertName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->httpsCertName) {
            $res['HttpsCertName'] = $this->httpsCertName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertAndKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['HttpsCertName'])) {
            $model->httpsCertName = $map['HttpsCertName'];
        }

        return $model;
    }
}
