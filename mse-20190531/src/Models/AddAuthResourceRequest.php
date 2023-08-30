<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceRequest\authResourceHeaderList;
use AlibabaCloud\Tea\Model;

class AddAuthResourceRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the authorization record.
     *
     * @example 13
     *
     * @var int
     */
    public $authId;

    /**
     * @var authResourceHeaderList[]
     */
    public $authResourceHeaderList;

    /**
     * @description The domain ID.
     *
     * @example 128
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-86575c0bc9f04ecfbacb92b8e392****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ignoreCase;

    /**
     * @description The matching type.
     *
     *   exact: exact matching
     *   prefix: prefix matching
     *   regex: regular expression matching
     *
     * @example exact
     *
     * @var string
     */
    public $matchType;

    /**
     * @description The path.
     *
     * @example /abc
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'acceptLanguage'         => 'AcceptLanguage',
        'authId'                 => 'AuthId',
        'authResourceHeaderList' => 'AuthResourceHeaderList',
        'domainId'               => 'DomainId',
        'gatewayUniqueId'        => 'GatewayUniqueId',
        'ignoreCase'             => 'IgnoreCase',
        'matchType'              => 'MatchType',
        'path'                   => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->authResourceHeaderList) {
            $res['AuthResourceHeaderList'] = [];
            if (null !== $this->authResourceHeaderList && \is_array($this->authResourceHeaderList)) {
                $n = 0;
                foreach ($this->authResourceHeaderList as $item) {
                    $res['AuthResourceHeaderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->ignoreCase) {
            $res['IgnoreCase'] = $this->ignoreCase;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAuthResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['AuthResourceHeaderList'])) {
            if (!empty($map['AuthResourceHeaderList'])) {
                $model->authResourceHeaderList = [];
                $n                             = 0;
                foreach ($map['AuthResourceHeaderList'] as $item) {
                    $model->authResourceHeaderList[$n++] = null !== $item ? authResourceHeaderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['IgnoreCase'])) {
            $model->ignoreCase = $map['IgnoreCase'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
