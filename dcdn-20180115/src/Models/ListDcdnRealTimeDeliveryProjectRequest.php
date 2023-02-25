<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ListDcdnRealTimeDeliveryProjectRequest extends Model
{
    /**
     * @description The type of the collected logs. Valid values:
     *
     *   **cdn_log_access_l1**: access logs of Dynamic Route for CDN (DCDN) points of presence (POP)
     *   **cdn_log_origin**: back-to-origin logs
     *   **cdn_log_er**: EdgeRoutine logs
     *   By default, this parameter is left empty, and all logs are returned.
     *
     * @example cdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The domain name. You can specify only one domain name in each request. If this parameter is not specified, all domain names are queried.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The number of the page to return. Valid values: **1** to **100000**. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. The default value is 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'businessType' => 'BusinessType',
        'domainName'   => 'DomainName',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDcdnRealTimeDeliveryProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
