<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificateStateResponseBody extends Model
{
    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $recordDomain;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $recordValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $validateType;
    protected $_name = [
        'certificate'  => 'Certificate',
        'content'      => 'Content',
        'domain'       => 'Domain',
        'privateKey'   => 'PrivateKey',
        'recordDomain' => 'RecordDomain',
        'recordType'   => 'RecordType',
        'recordValue'  => 'RecordValue',
        'requestId'    => 'RequestId',
        'type'         => 'Type',
        'uri'          => 'Uri',
        'validateType' => 'ValidateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->recordDomain) {
            $res['RecordDomain'] = $this->recordDomain;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->recordValue) {
            $res['RecordValue'] = $this->recordValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
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
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RecordDomain'])) {
            $model->recordDomain = $map['RecordDomain'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['RecordValue'])) {
            $model->recordValue = $map['RecordValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
