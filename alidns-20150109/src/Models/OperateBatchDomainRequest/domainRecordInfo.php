<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest;

use AlibabaCloud\Tea\Model;

class domainRecordInfo extends Model
{
    /**
     * @description The domain name corresponding to DNS record N.
     *
     * >  N is specified by users. **N** starts from **1**. The maximum value of N is **1000**. Extra data entries are ignored.
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The resolution line of DNS record N. Default value: default.
     *
     * For more information, see [Resolution line enumeration](https://www.alibabacloud.com/help/zh/doc-detail/29807.htm).
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $newRr;

    /**
     * @var string
     */
    public $newType;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @description The priority of MX-type DNS record N.
     *
     * This parameter must be specified if the type of the DNS record is MX. Default value: 10.
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The host record corresponding to DNS record N.
     *
     * >  If you set the Type parameter to **RR_ADD**, you must also specify this parameter.
     * @example zhaohui
     *
     * @var string
     */
    public $rr;

    /**
     * @description The TTL of DNS record N. Unit: seconds. Default value: **600**.
     *
     * @example 600
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of DNS record N. For the DNS record types supported by Alibaba Cloud DNS, see [Resolution record type formats](https://www.alibabacloud.com/help/zh/doc-detail/29805.htm).
     *
     * >  If you set the Type parameter to **RR_ADD**, you must also specify this parameter.
     * @example MX
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of DNS record N.
     *
     * >  If you set the Type parameter to **RR_ADD**, you must also specify this parameter.
     * @example fd87da3c4528844d45af39200155a905
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domain'   => 'Domain',
        'line'     => 'Line',
        'newRr'    => 'NewRr',
        'newType'  => 'NewType',
        'newValue' => 'NewValue',
        'priority' => 'Priority',
        'rr'       => 'Rr',
        'ttl'      => 'Ttl',
        'type'     => 'Type',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->newRr) {
            $res['NewRr'] = $this->newRr;
        }
        if (null !== $this->newType) {
            $res['NewType'] = $this->newType;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainRecordInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['NewRr'])) {
            $model->newRr = $map['NewRr'];
        }
        if (isset($map['NewType'])) {
            $model->newType = $map['NewType'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
