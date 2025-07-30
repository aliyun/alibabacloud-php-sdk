<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetCAInstanceStatusRequest extends Model
{
    /**
     * @description The unique identifier of the certificate.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the private CA instance.
     *
     * >  After you purchase a private CA instance by using the [SSL Certificates Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist), you can click **Details** for the private CA instance on the **Private Certificates** page to query the ID of the private CA instance.
     *
     * @example cas-member-0hmi****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'identifier' => 'Identifier',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCAInstanceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
