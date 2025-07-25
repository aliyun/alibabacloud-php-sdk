<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRemarkRequest extends Model
{
    /**
     * @description The domain name that already exists in Alibaba Cloud Domain Name System (DNS). You can call the [DescribeDomains ](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describedomains?spm=a2c63.p38356.help-menu-search-29697.d_0)operation to obtain the domain name.
     *
     * This parameter is required.
     *
     * @example mydomain.com
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
     * Default value: en
     *
     * @example cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The description of the domain name.
     *
     * It can be up to 50 characters in length and can contain digits, letters, and the following special characters: _ - , .
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
     * @return UpdateDomainRemarkRequest
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
