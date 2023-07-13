<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppDomainListOpenResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @example a12*******
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1619598445000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1619598445000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example example.com
     *
     * @var string
     */
    public $host;

    /**
     * @example 1548
     *
     * @var int
     */
    public $id;

    /**
     * @example YES
     *
     * @var string
     */
    public $isBeian;

    /**
     * @example a123********
     *
     * @var string
     */
    public $projectId;

    /**
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @example C70B541046F64EAAB*********
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'appId'       => 'AppId',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'host'        => 'Host',
        'id'          => 'Id',
        'isBeian'     => 'IsBeian',
        'projectId'   => 'ProjectId',
        'protocol'    => 'Protocol',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
     * @return domainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
