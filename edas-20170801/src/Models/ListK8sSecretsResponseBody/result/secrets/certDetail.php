<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets;

use AlibabaCloud\Tea\Model;

class certDetail extends Model
{
    /**
     * @description Domain names that are associated with the SSL certificate.
     *
     * @var string[]
     */
    public $domainNames;

    /**
     * @description The time when the SSL certificate expired.
     *
     * @example 2022-02-22T02:32:41Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The certificate authority (CA) that issued the SSL certificate.
     *
     * @example CN=GlobalSign Root CA, OU=Root CA, O=GlobalSign nv-sa, C=BE
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The time when the SSL certificate started to take effect.
     *
     * @example 2022-01-02T22:40:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the SSL certificate. Valid values:
     *
     *   normal: The SSL certificate is valid.
     *   invalid: The SSL certificate is invalid.
     *   expired: The SSL certificate has expired.
     *   not_yet_valid: The SSL certificate is currently invalid.
     *   about_to_expire: The SSL certificate is about to expire.
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'endTime'     => 'EndTime',
        'issuer'      => 'Issuer',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            if (!empty($map['DomainNames'])) {
                $model->domainNames = $map['DomainNames'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
