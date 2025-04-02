<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceRequest\authResourceHeaderList;

class AddAuthResourceRequest extends Model
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
     * @var authResourceHeaderList[]
     */
    public $authResourceHeaderList;

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
        'authResourceHeaderList' => 'AuthResourceHeaderList',
        'domainId' => 'DomainId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'ignoreCase' => 'IgnoreCase',
        'matchType' => 'MatchType',
        'path' => 'Path',
    ];

    public function validate()
    {
        if (\is_array($this->authResourceHeaderList)) {
            Model::validateArray($this->authResourceHeaderList);
        }
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

        if (null !== $this->authResourceHeaderList) {
            if (\is_array($this->authResourceHeaderList)) {
                $res['AuthResourceHeaderList'] = [];
                $n1 = 0;
                foreach ($this->authResourceHeaderList as $item1) {
                    $res['AuthResourceHeaderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['AuthResourceHeaderList'])) {
                $model->authResourceHeaderList = [];
                $n1 = 0;
                foreach ($map['AuthResourceHeaderList'] as $item1) {
                    $model->authResourceHeaderList[$n1++] = authResourceHeaderList::fromMap($item1);
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
