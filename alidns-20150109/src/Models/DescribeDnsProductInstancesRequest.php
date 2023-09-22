<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsProductInstancesRequest extends Model
{
    /**
     * @example DESC
     *
     * @var string
     */
    public $direction;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The version code of the Alibaba Cloud DNS instance.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example createDate
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the request.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of domain names.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The page number of the returned page.
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
