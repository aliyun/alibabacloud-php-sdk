<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data\resourceList\authResourceHeaderList;

class resourceList extends Model
{
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
    public $domainName;
    /**
     * @var int
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $ignoreCase;
    /**
     * @var bool
     */
    public $isWhite;
    /**
     * @var string
     */
    public $matchType;
    /**
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
        if (\is_array($this->authResourceHeaderList)) {
            Model::validateArray($this->authResourceHeaderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->authResourceHeaderList) {
            if (\is_array($this->authResourceHeaderList)) {
                $res['AuthResourceHeaderList'] = [];
                $n1                            = 0;
                foreach ($this->authResourceHeaderList as $item1) {
                    $res['AuthResourceHeaderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }

        if (isset($map['AuthResourceHeaderList'])) {
            if (!empty($map['AuthResourceHeaderList'])) {
                $model->authResourceHeaderList = [];
                $n1                            = 0;
                foreach ($map['AuthResourceHeaderList'] as $item1) {
                    $model->authResourceHeaderList[$n1++] = authResourceHeaderList::fromMap($item1);
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
