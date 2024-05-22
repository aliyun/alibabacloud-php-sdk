<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest;

use AlibabaCloud\Tea\Model;

class domainRecordInfo extends Model
{
    /**
     * @description The domain name.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The resolution line. Default value: default.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @example mail
     *
     * @var string
     */
    public $newRr;

    /**
     * @example AAAA
     *
     * @var string
     */
    public $newType;

    /**
     * @example 114.92.XX.XX
     *
     * @var string
     */
    public $newValue;

    /**
     * @description The priority of the mail exchanger (MX) record.
     *
     * This parameter is required if the type of the DNS record is MX. Default value: 10.
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The hostname.
     *
     * >  This parameter is required if you set Type to **RR_ADD** or **RR_DEL**.
     * @example zhaohui
     *
     * @var string
     */
    public $rr;

    /**
     * @description The time-to-live (TTL) value of the cached DNS record. Unit: seconds. Default value: ***600***.
     *
     * @example 600
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the DNS record. Valid values: A, AAAA, TXT, MX, and CNAME.
     *
     * >  This parameter is required if you set Type to **RR_ADD** or **RR_DEL**.
     * @example MX
     *
     * @var string
     */
    public $type;

    /**
     * @description The record value.
     *
     * >  This parameter is required if you set Type to **RR_ADD** or **RR_DEL**.
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
