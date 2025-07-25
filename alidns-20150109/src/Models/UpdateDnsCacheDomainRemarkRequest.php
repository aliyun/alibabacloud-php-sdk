<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDnsCacheDomainRemarkRequest extends Model
{
    /**
     * @description The domain name. You can call the [DescribeDomains](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describedomains?spm=a2c63.p38356.help-menu-search-29697.d_0) operation to obtain the domain name.
     *
     * This parameter is required.
     *
     * @example dns-example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * Default: **zh**
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The remarks. The remarks can be up to 50 characters in length and can contain only letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * Delete the original remarks when it is empty.
     *
     * @example test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'remark' => 'Remark',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsCacheDomainRemarkRequest
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
