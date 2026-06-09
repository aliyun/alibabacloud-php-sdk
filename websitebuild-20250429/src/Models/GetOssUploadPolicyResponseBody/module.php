<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetOssUploadPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $xossCredential;

    /**
     * @var string
     */
    public $xossDate;
    protected $_name = [
        'dir' => 'Dir',
        'host' => 'Host',
        'policy' => 'Policy',
        'securityToken' => 'SecurityToken',
        'signature' => 'Signature',
        'version' => 'Version',
        'xossCredential' => 'XossCredential',
        'xossDate' => 'XossDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->xossCredential) {
            $res['XossCredential'] = $this->xossCredential;
        }

        if (null !== $this->xossDate) {
            $res['XossDate'] = $this->xossDate;
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
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['XossCredential'])) {
            $model->xossCredential = $map['XossCredential'];
        }

        if (isset($map['XossDate'])) {
            $model->xossDate = $map['XossDate'];
        }

        return $model;
    }
}
