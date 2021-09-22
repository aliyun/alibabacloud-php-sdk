<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingCustomDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $sslProtocol;

    /**
     * @var string
     */
    public $forceRedirectType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var bool
     */
    public $enableCors;

    /**
     * @var string
     */
    public $accessControlAllowOrigin;
    protected $_name = [
        'status'                   => 'Status',
        'domain'                   => 'Domain',
        'updateTime'               => 'UpdateTime',
        'sslProtocol'              => 'SslProtocol',
        'forceRedirectType'        => 'ForceRedirectType',
        'description'              => 'Description',
        'createTime'               => 'CreateTime',
        'cname'                    => 'Cname',
        'enableCors'               => 'EnableCors',
        'accessControlAllowOrigin' => 'AccessControlAllowOrigin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->sslProtocol) {
            $res['SslProtocol'] = $this->sslProtocol;
        }
        if (null !== $this->forceRedirectType) {
            $res['ForceRedirectType'] = $this->forceRedirectType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->enableCors) {
            $res['EnableCors'] = $this->enableCors;
        }
        if (null !== $this->accessControlAllowOrigin) {
            $res['AccessControlAllowOrigin'] = $this->accessControlAllowOrigin;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['SslProtocol'])) {
            $model->sslProtocol = $map['SslProtocol'];
        }
        if (isset($map['ForceRedirectType'])) {
            $model->forceRedirectType = $map['ForceRedirectType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['EnableCors'])) {
            $model->enableCors = $map['EnableCors'];
        }
        if (isset($map['AccessControlAllowOrigin'])) {
            $model->accessControlAllowOrigin = $map['AccessControlAllowOrigin'];
        }

        return $model;
    }
}
