<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetFileBlobsRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example src/Test.java
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 10
     *
     * @var int
     */
    public $from;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example master  / tag1.0 /  ecykhdd
     *
     * @var string
     */
    public $ref;

    /**
     * @example 10
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'filePath'       => 'filePath',
        'from'           => 'from',
        'organizationId' => 'organizationId',
        'ref'            => 'ref',
        'to'             => 'to',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->ref) {
            $res['ref'] = $this->ref;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileBlobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['ref'])) {
            $model->ref = $map['ref'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
