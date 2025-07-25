<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainRecordRequest extends Model
{
    /**
     * @description The domain name. You can call the [DescribeDomains](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describedomains?spm=a2c63.p38356.help-menu-search-29697.d_0) operation to obtain the domain name.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English Default: **zh**
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The resolution line. Default value: **default**. For more information, see
     *
     * [DNS resolution lines](https://www.alibabacloud.com/help/zh/doc-detail/29807.htm).
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description The priority of the mail exchanger (MX) record. Valid values: `1 to 50`.
     *
     * This parameter is required if the type of the DNS record is MX. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The hostname.
     *
     * For example, to resolve @.example.com, you must set this parameter to an at sign (@). You cannot leave this parameter empty.
     *
     * This parameter is required.
     *
     * @example www
     *
     * @var string
     */
    public $RR;

    /**
     * @description The time to live (TTL) period of the Alibaba Cloud DNS (DNS) record. Default value: 600. Unit: seconds. For more information, see
     *
     * [TTL definition](https://www.alibabacloud.com/help/zh/doc-detail/29806.htm).
     *
     * @example 600
     *
     * @var int
     */
    public $TTL;

    /**
     * @description The type of the DNS record. For more information, see
     *
     * [DNS record types](https://www.alibabacloud.com/help/zh/doc-detail/29805.htm).
     *
     * This parameter is required.
     *
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @description The IP address of the client.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The value of the DNS record.
     *
     * This parameter is required.
     *
     * @example 192.0.2.254
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'line' => 'Line',
        'priority' => 'Priority',
        'RR' => 'RR',
        'TTL' => 'TTL',
        'type' => 'Type',
        'userClientIp' => 'UserClientIp',
        'value' => 'Value',
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
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainRecordRequest
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
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
