<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponseBody\data\comment;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponseBody\data\tlsCipherSuitesConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $certBeforeDate;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var comment
     */
    public $comment;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $http2;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isManaged;

    /**
     * @var bool
     */
    public $mustHttps;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $status;

    /**
     * @var tlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @var string
     */
    public $tlsMax;

    /**
     * @var string
     */
    public $tlsMin;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'certBeforeDate' => 'CertBeforeDate',
        'certIdentifier' => 'CertIdentifier',
        'comment' => 'Comment',
        'gatewayId' => 'GatewayId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'http2' => 'Http2',
        'id' => 'Id',
        'isManaged' => 'IsManaged',
        'mustHttps' => 'MustHttps',
        'name' => 'Name',
        'protocol' => 'Protocol',
        'status' => 'Status',
        'tlsCipherSuitesConfig' => 'TlsCipherSuitesConfig',
        'tlsMax' => 'TlsMax',
        'tlsMin' => 'TlsMin',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->comment) {
            $this->comment->validate();
        }
        if (null !== $this->tlsCipherSuitesConfig) {
            $this->tlsCipherSuitesConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certBeforeDate) {
            $res['CertBeforeDate'] = $this->certBeforeDate;
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->comment) {
            $res['Comment'] = null !== $this->comment ? $this->comment->toArray($noStream) : $this->comment;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->http2) {
            $res['Http2'] = $this->http2;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isManaged) {
            $res['IsManaged'] = $this->isManaged;
        }

        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tlsCipherSuitesConfig) {
            $res['TlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toArray($noStream) : $this->tlsCipherSuitesConfig;
        }

        if (null !== $this->tlsMax) {
            $res['TlsMax'] = $this->tlsMax;
        }

        if (null !== $this->tlsMin) {
            $res['TlsMin'] = $this->tlsMin;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CertBeforeDate'])) {
            $model->certBeforeDate = $map['CertBeforeDate'];
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['Comment'])) {
            $model->comment = comment::fromMap($map['Comment']);
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Http2'])) {
            $model->http2 = $map['Http2'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsManaged'])) {
            $model->isManaged = $map['IsManaged'];
        }

        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TlsCipherSuitesConfig'])) {
            $model->tlsCipherSuitesConfig = tlsCipherSuitesConfig::fromMap($map['TlsCipherSuitesConfig']);
        }

        if (isset($map['TlsMax'])) {
            $model->tlsMax = $map['TlsMax'];
        }

        if (isset($map['TlsMin'])) {
            $model->tlsMin = $map['TlsMin'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
