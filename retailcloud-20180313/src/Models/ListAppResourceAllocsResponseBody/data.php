<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppResourceAllocsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appEnvId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $resourceDef;
    protected $_name = [
        'appEnvId'    => 'AppEnvId',
        'appId'       => 'AppId',
        'clusterId'   => 'ClusterId',
        'id'          => 'Id',
        'resourceDef' => 'ResourceDef',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnvId) {
            $res['AppEnvId'] = $this->appEnvId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resourceDef) {
            $res['ResourceDef'] = $this->resourceDef;
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
        if (isset($map['AppEnvId'])) {
            $model->appEnvId = $map['AppEnvId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ResourceDef'])) {
            $model->resourceDef = $map['ResourceDef'];
        }

        return $model;
    }
}
