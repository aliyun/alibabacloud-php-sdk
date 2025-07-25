<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ListCloudGtmMonitorTemplatesRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US (default): English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The IP address type of health check nodes. Valid values:
     *
     *   IPv4: applicable when health checks are performed on IPv4 addresses.
     *   IPv6: applicable when health checks are performed on IPv6 addresses.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The name of the health check probe template, which is recommended to be distinguishable for configuration personnel to differentiate and remember, ideally indicating the health check protocol.
     *
     * @example IPv4-Ping
     *
     * @var string
     */
    public $name;

    /**
     * @description Current page number, starting from **1**, default is **1**.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows per page when paginating queries, with a maximum value of 100 and a default of 20.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Protocol types for initiating probes to the target IP address:
     * - ping
     * - tcp
     * - http
     * - https
     *
     * @example ping
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'ipVersion' => 'IpVersion',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'protocol' => 'Protocol',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmMonitorTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
