<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetKeylessServerResponseBody extends Model
{
    /**
     * @var string
     */
    public $caCertificate;

    /**
     * @var string
     */
    public $clientCertificate;

    /**
     * @var string
     */
    public $clientPrivateKey;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $verify;
    protected $_name = [
        'caCertificate' => 'CaCertificate',
        'clientCertificate' => 'ClientCertificate',
        'clientPrivateKey' => 'ClientPrivateKey',
        'createTime' => 'CreateTime',
        'host' => 'Host',
        'id' => 'Id',
        'name' => 'Name',
        'port' => 'Port',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'updateTime' => 'UpdateTime',
        'verify' => 'Verify',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertificate) {
            $res['CaCertificate'] = $this->caCertificate;
        }

        if (null !== $this->clientCertificate) {
            $res['ClientCertificate'] = $this->clientCertificate;
        }

        if (null !== $this->clientPrivateKey) {
            $res['ClientPrivateKey'] = $this->clientPrivateKey;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->verify) {
            $res['Verify'] = $this->verify;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCertificate'])) {
            $model->caCertificate = $map['CaCertificate'];
        }

        if (isset($map['ClientCertificate'])) {
            $model->clientCertificate = $map['ClientCertificate'];
        }

        if (isset($map['ClientPrivateKey'])) {
            $model->clientPrivateKey = $map['ClientPrivateKey'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Verify'])) {
            $model->verify = $map['Verify'];
        }

        return $model;
    }
}
