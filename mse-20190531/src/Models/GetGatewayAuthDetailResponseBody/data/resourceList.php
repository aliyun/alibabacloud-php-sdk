<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data\resourceList\authResourceHeaderList;
use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @example 2274
     *
     * @var int
     */
    public $authId;

    /**
     * @var authResourceHeaderList[]
     */
    public $authResourceHeaderList;

    /**
     * @example 1765
     *
     * @var int
     */
    public $domainId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2274
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @example gw-6f0dbd108a0249d2b675b3ef50b*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 2024-02-19T03:32:38.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-02-19T03:32:38.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1303
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $ignoreCase;

    /**
     * @example true
     *
     * @var bool
     */
    public $isWhite;

    /**
     * @example EQUAL
     *
     * @var string
     */
    public $matchType;

    /**
     * @example /test
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'authId'                 => 'AuthId',
        'authResourceHeaderList' => 'AuthResourceHeaderList',
        'domainId'               => 'DomainId',
        'domainName'             => 'DomainName',
        'gatewayId'              => 'GatewayId',
        'gatewayUniqueId'        => 'GatewayUniqueId',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'id'                     => 'Id',
        'ignoreCase'             => 'IgnoreCase',
        'isWhite'                => 'IsWhite',
        'matchType'              => 'MatchType',
        'path'                   => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ignoreCase) {
            $res['IgnoreCase'] = $this->ignoreCase;
        }
        if (null !== $this->isWhite) {
            $res['IsWhite'] = $this->isWhite;
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
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IgnoreCase'])) {
            $model->ignoreCase = $map['IgnoreCase'];
        }
        if (isset($map['IsWhite'])) {
            $model->isWhite = $map['IsWhite'];
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
