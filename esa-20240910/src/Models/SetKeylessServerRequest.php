<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetKeylessServerRequest extends Model
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
     * @var int
     */
    public $siteId;

    /**
     * @var bool
     */
    public $verify;
    protected $_name = [
        'caCertificate' => 'CaCertificate',
        'clientCertificate' => 'ClientCertificate',
        'clientPrivateKey' => 'ClientPrivateKey',
        'host' => 'Host',
        'id' => 'Id',
        'name' => 'Name',
        'port' => 'Port',
        'siteId' => 'SiteId',
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

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Verify'])) {
            $model->verify = $map['Verify'];
        }

        return $model;
    }
}
