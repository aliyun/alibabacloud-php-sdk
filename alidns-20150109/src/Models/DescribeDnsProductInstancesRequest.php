<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsProductInstancesRequest extends Model
{
    /**
     * @description The Sorting direction. Values:
     * **DESC**: Descending (if not specified, the default is descending order)
     * **ASC**: Ascending
     *
     * @example DESC
     *
     * @var string
     */
    public $direction;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   PUBLIC (default): hosted public domain name
     *   CACHE: cached public domain name
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** : Chinese
     *   **en** (default) : English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The Sorting parameter. Values:
     * createDate: Sort by creation time (if not specified, the default is to sort by creation time)
     * expireDate: Sort by expiration time
     *
     * @example createDate
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IP address of the client.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The version code of the Alibaba Cloud DNS instance.
     *
     * @example version1
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'direction'    => 'Direction',
        'domainType'   => 'DomainType',
        'lang'         => 'Lang',
        'orderBy'      => 'OrderBy',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'userClientIp' => 'UserClientIp',
        'versionCode'  => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsProductInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
