<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class AddAuthResourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $authId;

    /**
     * @var string
     */
    public $authResourceHeaderListShrink;

    /**
     * @var int
     */
    public $domainId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var bool
     */
    public $ignoreCase;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'authId' => 'AuthId',
        'authResourceHeaderListShrink' => 'AuthResourceHeaderList',
        'domainId' => 'DomainId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'ignoreCase' => 'IgnoreCase',
        'matchType' => 'MatchType',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->authResourceHeaderListShrink) {
            $res['AuthResourceHeaderList'] = $this->authResourceHeaderListShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            $model->authResourceHeaderListShrink = $map['AuthResourceHeaderList'];
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
