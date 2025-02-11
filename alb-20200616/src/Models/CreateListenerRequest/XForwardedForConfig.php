<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;

use AlibabaCloud\Dara\Model;

class XForwardedForConfig extends Model
{
    /**
     * @var string
     */
    public $XForwardedForClientCertClientVerifyAlias;
    /**
     * @var bool
     */
    public $XForwardedForClientCertClientVerifyEnabled;
    /**
     * @var string
     */
    public $XForwardedForClientCertFingerprintAlias;
    /**
     * @var bool
     */
    public $XForwardedForClientCertFingerprintEnabled;
    /**
     * @var string
     */
    public $XForwardedForClientCertIssuerDNAlias;
    /**
     * @var bool
     */
    public $XForwardedForClientCertIssuerDNEnabled;
    /**
     * @var string
     */
    public $XForwardedForClientCertSubjectDNAlias;
    /**
     * @var bool
     */
    public $XForwardedForClientCertSubjectDNEnabled;
    /**
     * @var bool
     */
    public $XForwardedForClientSourceIpsEnabled;
    /**
     * @var string
     */
    public $XForwardedForClientSourceIpsTrusted;
    /**
     * @var bool
     */
    public $XForwardedForClientSrcPortEnabled;
    /**
     * @var bool
     */
    public $XForwardedForEnabled;
    /**
     * @var bool
     */
    public $XForwardedForHostEnabled;
    /**
     * @var string
     */
    public $XForwardedForProcessingMode;
    /**
     * @var bool
     */
    public $XForwardedForProtoEnabled;
    /**
     * @var bool
     */
    public $XForwardedForSLBIdEnabled;
    /**
     * @var bool
     */
    public $XForwardedForSLBPortEnabled;
    protected $_name = [
        'XForwardedForClientCertClientVerifyAlias'   => 'XForwardedForClientCertClientVerifyAlias',
        'XForwardedForClientCertClientVerifyEnabled' => 'XForwardedForClientCertClientVerifyEnabled',
        'XForwardedForClientCertFingerprintAlias'    => 'XForwardedForClientCertFingerprintAlias',
        'XForwardedForClientCertFingerprintEnabled'  => 'XForwardedForClientCertFingerprintEnabled',
        'XForwardedForClientCertIssuerDNAlias'       => 'XForwardedForClientCertIssuerDNAlias',
        'XForwardedForClientCertIssuerDNEnabled'     => 'XForwardedForClientCertIssuerDNEnabled',
        'XForwardedForClientCertSubjectDNAlias'      => 'XForwardedForClientCertSubjectDNAlias',
        'XForwardedForClientCertSubjectDNEnabled'    => 'XForwardedForClientCertSubjectDNEnabled',
        'XForwardedForClientSourceIpsEnabled'        => 'XForwardedForClientSourceIpsEnabled',
        'XForwardedForClientSourceIpsTrusted'        => 'XForwardedForClientSourceIpsTrusted',
        'XForwardedForClientSrcPortEnabled'          => 'XForwardedForClientSrcPortEnabled',
        'XForwardedForEnabled'                       => 'XForwardedForEnabled',
        'XForwardedForHostEnabled'                   => 'XForwardedForHostEnabled',
        'XForwardedForProcessingMode'                => 'XForwardedForProcessingMode',
        'XForwardedForProtoEnabled'                  => 'XForwardedForProtoEnabled',
        'XForwardedForSLBIdEnabled'                  => 'XForwardedForSLBIdEnabled',
        'XForwardedForSLBPortEnabled'                => 'XForwardedForSLBPortEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->XForwardedForClientCertClientVerifyAlias) {
            $res['XForwardedForClientCertClientVerifyAlias'] = $this->XForwardedForClientCertClientVerifyAlias;
        }

        if (null !== $this->XForwardedForClientCertClientVerifyEnabled) {
            $res['XForwardedForClientCertClientVerifyEnabled'] = $this->XForwardedForClientCertClientVerifyEnabled;
        }

        if (null !== $this->XForwardedForClientCertFingerprintAlias) {
            $res['XForwardedForClientCertFingerprintAlias'] = $this->XForwardedForClientCertFingerprintAlias;
        }

        if (null !== $this->XForwardedForClientCertFingerprintEnabled) {
            $res['XForwardedForClientCertFingerprintEnabled'] = $this->XForwardedForClientCertFingerprintEnabled;
        }

        if (null !== $this->XForwardedForClientCertIssuerDNAlias) {
            $res['XForwardedForClientCertIssuerDNAlias'] = $this->XForwardedForClientCertIssuerDNAlias;
        }

        if (null !== $this->XForwardedForClientCertIssuerDNEnabled) {
            $res['XForwardedForClientCertIssuerDNEnabled'] = $this->XForwardedForClientCertIssuerDNEnabled;
        }

        if (null !== $this->XForwardedForClientCertSubjectDNAlias) {
            $res['XForwardedForClientCertSubjectDNAlias'] = $this->XForwardedForClientCertSubjectDNAlias;
        }

        if (null !== $this->XForwardedForClientCertSubjectDNEnabled) {
            $res['XForwardedForClientCertSubjectDNEnabled'] = $this->XForwardedForClientCertSubjectDNEnabled;
        }

        if (null !== $this->XForwardedForClientSourceIpsEnabled) {
            $res['XForwardedForClientSourceIpsEnabled'] = $this->XForwardedForClientSourceIpsEnabled;
        }

        if (null !== $this->XForwardedForClientSourceIpsTrusted) {
            $res['XForwardedForClientSourceIpsTrusted'] = $this->XForwardedForClientSourceIpsTrusted;
        }

        if (null !== $this->XForwardedForClientSrcPortEnabled) {
            $res['XForwardedForClientSrcPortEnabled'] = $this->XForwardedForClientSrcPortEnabled;
        }

        if (null !== $this->XForwardedForEnabled) {
            $res['XForwardedForEnabled'] = $this->XForwardedForEnabled;
        }

        if (null !== $this->XForwardedForHostEnabled) {
            $res['XForwardedForHostEnabled'] = $this->XForwardedForHostEnabled;
        }

        if (null !== $this->XForwardedForProcessingMode) {
            $res['XForwardedForProcessingMode'] = $this->XForwardedForProcessingMode;
        }

        if (null !== $this->XForwardedForProtoEnabled) {
            $res['XForwardedForProtoEnabled'] = $this->XForwardedForProtoEnabled;
        }

        if (null !== $this->XForwardedForSLBIdEnabled) {
            $res['XForwardedForSLBIdEnabled'] = $this->XForwardedForSLBIdEnabled;
        }

        if (null !== $this->XForwardedForSLBPortEnabled) {
            $res['XForwardedForSLBPortEnabled'] = $this->XForwardedForSLBPortEnabled;
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
        if (isset($map['XForwardedForClientCertClientVerifyAlias'])) {
            $model->XForwardedForClientCertClientVerifyAlias = $map['XForwardedForClientCertClientVerifyAlias'];
        }

        if (isset($map['XForwardedForClientCertClientVerifyEnabled'])) {
            $model->XForwardedForClientCertClientVerifyEnabled = $map['XForwardedForClientCertClientVerifyEnabled'];
        }

        if (isset($map['XForwardedForClientCertFingerprintAlias'])) {
            $model->XForwardedForClientCertFingerprintAlias = $map['XForwardedForClientCertFingerprintAlias'];
        }

        if (isset($map['XForwardedForClientCertFingerprintEnabled'])) {
            $model->XForwardedForClientCertFingerprintEnabled = $map['XForwardedForClientCertFingerprintEnabled'];
        }

        if (isset($map['XForwardedForClientCertIssuerDNAlias'])) {
            $model->XForwardedForClientCertIssuerDNAlias = $map['XForwardedForClientCertIssuerDNAlias'];
        }

        if (isset($map['XForwardedForClientCertIssuerDNEnabled'])) {
            $model->XForwardedForClientCertIssuerDNEnabled = $map['XForwardedForClientCertIssuerDNEnabled'];
        }

        if (isset($map['XForwardedForClientCertSubjectDNAlias'])) {
            $model->XForwardedForClientCertSubjectDNAlias = $map['XForwardedForClientCertSubjectDNAlias'];
        }

        if (isset($map['XForwardedForClientCertSubjectDNEnabled'])) {
            $model->XForwardedForClientCertSubjectDNEnabled = $map['XForwardedForClientCertSubjectDNEnabled'];
        }

        if (isset($map['XForwardedForClientSourceIpsEnabled'])) {
            $model->XForwardedForClientSourceIpsEnabled = $map['XForwardedForClientSourceIpsEnabled'];
        }

        if (isset($map['XForwardedForClientSourceIpsTrusted'])) {
            $model->XForwardedForClientSourceIpsTrusted = $map['XForwardedForClientSourceIpsTrusted'];
        }

        if (isset($map['XForwardedForClientSrcPortEnabled'])) {
            $model->XForwardedForClientSrcPortEnabled = $map['XForwardedForClientSrcPortEnabled'];
        }

        if (isset($map['XForwardedForEnabled'])) {
            $model->XForwardedForEnabled = $map['XForwardedForEnabled'];
        }

        if (isset($map['XForwardedForHostEnabled'])) {
            $model->XForwardedForHostEnabled = $map['XForwardedForHostEnabled'];
        }

        if (isset($map['XForwardedForProcessingMode'])) {
            $model->XForwardedForProcessingMode = $map['XForwardedForProcessingMode'];
        }

        if (isset($map['XForwardedForProtoEnabled'])) {
            $model->XForwardedForProtoEnabled = $map['XForwardedForProtoEnabled'];
        }

        if (isset($map['XForwardedForSLBIdEnabled'])) {
            $model->XForwardedForSLBIdEnabled = $map['XForwardedForSLBIdEnabled'];
        }

        if (isset($map['XForwardedForSLBPortEnabled'])) {
            $model->XForwardedForSLBPortEnabled = $map['XForwardedForSLBPortEnabled'];
        }

        return $model;
    }
}
