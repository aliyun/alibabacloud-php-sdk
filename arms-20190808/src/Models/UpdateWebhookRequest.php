<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $httpHeaders;

    /**
     * @var string
     */
    public $httpParams;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $recoverBody;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'body'        => 'Body',
        'contactId'   => 'ContactId',
        'contactName' => 'ContactName',
        'httpHeaders' => 'HttpHeaders',
        'httpParams'  => 'HttpParams',
        'method'      => 'Method',
        'recoverBody' => 'RecoverBody',
        'regionId'    => 'RegionId',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->httpHeaders) {
            $res['HttpHeaders'] = $this->httpHeaders;
        }
        if (null !== $this->httpParams) {
            $res['HttpParams'] = $this->httpParams;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->recoverBody) {
            $res['RecoverBody'] = $this->recoverBody;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['HttpHeaders'])) {
            $model->httpHeaders = $map['HttpHeaders'];
        }
        if (isset($map['HttpParams'])) {
            $model->httpParams = $map['HttpParams'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['RecoverBody'])) {
            $model->recoverBody = $map['RecoverBody'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
