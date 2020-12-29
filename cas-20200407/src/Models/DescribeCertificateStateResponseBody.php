<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificateStateResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $recordDomain;

    /**
     * @var string
     */
    public $recordValue;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $validateType;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $certificate;
    protected $_name = [
        'type'         => 'Type',
        'privateKey'   => 'PrivateKey',
        'recordType'   => 'RecordType',
        'requestId'    => 'RequestId',
        'content'      => 'Content',
        'recordDomain' => 'RecordDomain',
        'recordValue'  => 'RecordValue',
        'domain'       => 'Domain',
        'validateType' => 'ValidateType',
        'uri'          => 'Uri',
        'certificate'  => 'Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->recordDomain) {
            $res['RecordDomain'] = $this->recordDomain;
        }
        if (null !== $this->recordValue) {
            $res['RecordValue'] = $this->recordValue;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertificateStateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RecordDomain'])) {
            $model->recordDomain = $map['RecordDomain'];
        }
        if (isset($map['RecordValue'])) {
            $model->recordValue = $map['RecordValue'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        return $model;
    }
}
