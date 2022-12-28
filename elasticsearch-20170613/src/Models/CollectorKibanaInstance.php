<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class CollectorKibanaInstance extends Model
{
    /**
     * @example collectorElasticsearchForKibana
     *
     * @var string
     */
    public $configType;

    /**
     * @example es-cn-*****-kibana.internal.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $host;

    /**
     * @example es-cn-45dfy****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example https://es-cn-****.kibana.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $kibanaHost;

    /**
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example username
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'configType' => 'configType',
        'host'       => 'host',
        'instanceId' => 'instanceId',
        'kibanaHost' => 'kibanaHost',
        'password'   => 'password',
        'protocol'   => 'protocol',
        'userName'   => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->kibanaHost) {
            $res['kibanaHost'] = $this->kibanaHost;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CollectorKibanaInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['kibanaHost'])) {
            $model->kibanaHost = $map['kibanaHost'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
