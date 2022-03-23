<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class QueryZnodeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterId'      => 'ClusterId',
        'instanceId'     => 'InstanceId',
        'path'           => 'Path',
        'requestPars'    => 'RequestPars',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryZnodeDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
