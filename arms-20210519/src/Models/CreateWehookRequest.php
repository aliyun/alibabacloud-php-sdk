<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class CreateWehookRequest extends Model
{
    /**
     * @var string
     */
    public $body;

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
    public $regionId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'body'        => 'Body',
        'contactName' => 'ContactName',
        'httpHeaders' => 'HttpHeaders',
        'httpParams'  => 'HttpParams',
        'method'      => 'Method',
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
     * @return CreateWehookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
