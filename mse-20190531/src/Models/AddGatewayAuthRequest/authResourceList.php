<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthRequest;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthRequest\authResourceList\authResourceHeaderList;
use AlibabaCloud\Tea\Model;

class authResourceList extends Model
{
    /**
     * @var authResourceHeaderList[]
     */
    public $authResourceHeaderList;

    /**
     * @description The domain ID.
     *
     * @example 1
     *
     * @var int
     */
    public $domainId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ignoreCase;

    /**
     * @example EQUAL
     *
     * @var string
     */
    public $matchType;

    /**
     * @description The request path.
     *
     * @example /test
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'authResourceHeaderList' => 'AuthResourceHeaderList',
        'domainId'               => 'DomainId',
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
     * @return authResourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
