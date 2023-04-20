<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingCustomDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://*.example.com, https://*.example.org
     *
     * @var string
     */
    public $accessControlAllowOrigin;

    /**
     * @example www.test.com.w.kunlungr.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example 1590470646000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example www.test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCors;

    /**
     * @example HTTPS_FORCE
     *
     * @var string
     */
    public $forceRedirectType;

    /**
     * @example off
     *
     * @var string
     */
    public $sslProtocol;

    /**
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @example 1590470646143
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'accessControlAllowOrigin' => 'AccessControlAllowOrigin',
        'cname'                    => 'Cname',
        'createTime'               => 'CreateTime',
        'description'              => 'Description',
        'domain'                   => 'Domain',
        'enableCors'               => 'EnableCors',
        'forceRedirectType'        => 'ForceRedirectType',
        'sslProtocol'              => 'SslProtocol',
        'status'                   => 'Status',
        'updateTime'               => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlAllowOrigin) {
            $res['AccessControlAllowOrigin'] = $this->accessControlAllowOrigin;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enableCors) {
            $res['EnableCors'] = $this->enableCors;
        }
        if (null !== $this->forceRedirectType) {
            $res['ForceRedirectType'] = $this->forceRedirectType;
        }
        if (null !== $this->sslProtocol) {
            $res['SslProtocol'] = $this->sslProtocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AccessControlAllowOrigin'])) {
            $model->accessControlAllowOrigin = $map['AccessControlAllowOrigin'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EnableCors'])) {
            $model->enableCors = $map['EnableCors'];
        }
        if (isset($map['ForceRedirectType'])) {
            $model->forceRedirectType = $map['ForceRedirectType'];
        }
        if (isset($map['SslProtocol'])) {
            $model->sslProtocol = $map['SslProtocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
