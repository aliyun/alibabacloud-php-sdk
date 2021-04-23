<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\GetMultiRateConfigResponseBody\templatesInfo;
use AlibabaCloud\Tea\Model;

class GetMultiRateConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $isLazy;

    /**
     * @var string
     */
    public $isTimeAlign;

    /**
     * @var string
     */
    public $stream;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $avFormat;

    /**
     * @var int
     */
    public $code;

    /**
     * @var templatesInfo
     */
    public $templatesInfo;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'app'           => 'App',
        'requestId'     => 'RequestId',
        'message'       => 'Message',
        'isLazy'        => 'IsLazy',
        'isTimeAlign'   => 'IsTimeAlign',
        'stream'        => 'Stream',
        'domain'        => 'Domain',
        'avFormat'      => 'AvFormat',
        'code'          => 'Code',
        'templatesInfo' => 'TemplatesInfo',
        'groupId'       => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->isLazy) {
            $res['IsLazy'] = $this->isLazy;
        }
        if (null !== $this->isTimeAlign) {
            $res['IsTimeAlign'] = $this->isTimeAlign;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->avFormat) {
            $res['AvFormat'] = $this->avFormat;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->templatesInfo) {
            $res['TemplatesInfo'] = null !== $this->templatesInfo ? $this->templatesInfo->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultiRateConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['IsLazy'])) {
            $model->isLazy = $map['IsLazy'];
        }
        if (isset($map['IsTimeAlign'])) {
            $model->isTimeAlign = $map['IsTimeAlign'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['AvFormat'])) {
            $model->avFormat = $map['AvFormat'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['TemplatesInfo'])) {
            $model->templatesInfo = templatesInfo::fromMap($map['TemplatesInfo']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
