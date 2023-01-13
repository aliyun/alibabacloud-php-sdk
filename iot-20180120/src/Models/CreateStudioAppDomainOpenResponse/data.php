<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateStudioAppDomainOpenResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $isBeian;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'appId'     => 'AppId',
        'host'      => 'Host',
        'id'        => 'Id',
        'isBeian'   => 'IsBeian',
        'projectId' => 'ProjectId',
        'protocol'  => 'Protocol',
        'tenantId'  => 'TenantId',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('host', $this->host, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('isBeian', $this->isBeian, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isBeian) {
            $res['IsBeian'] = $this->isBeian;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsBeian'])) {
            $model->isBeian = $map['IsBeian'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
