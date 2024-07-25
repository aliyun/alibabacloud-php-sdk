<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class DomainInfo extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $createFrom;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var bool
     */
    public $forceHttps;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'certIdentifier'  => 'certIdentifier',
        'createFrom'      => 'createFrom',
        'createTimestamp' => 'createTimestamp',
        'domainId'        => 'domainId',
        'forceHttps'      => 'forceHttps',
        'name'            => 'name',
        'protocol'        => 'protocol',
        'status'          => 'status',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->createFrom) {
            $res['createFrom'] = $this->createFrom;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }
        if (null !== $this->forceHttps) {
            $res['forceHttps'] = $this->forceHttps;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DomainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }
        if (isset($map['createFrom'])) {
            $model->createFrom = $map['createFrom'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }
        if (isset($map['forceHttps'])) {
            $model->forceHttps = $map['forceHttps'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
