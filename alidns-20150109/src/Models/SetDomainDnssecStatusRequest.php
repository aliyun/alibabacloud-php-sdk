<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDomainDnssecStatusRequest extends Model
{
    /**
     * @description The domain name for which you want to enable the DNSSEC. Only the users of the paid editions of Alibaba Cloud DNS can enable this feature.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The DNSSEC status. Valid values:
     *
     *   ON: enables DNSSEC for the domain name.
     *   OFF: disables DNSSEC for the domain name.
     *
     * This parameter is required.
     *
     * @example ON
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainDnssecStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
