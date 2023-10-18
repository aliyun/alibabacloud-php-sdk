<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class SM2CertDetail extends Model
{
    /**
     * @description The domain name of your website.
     *
     * @example test.aliyundoc.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The end of the validity period of the SSL certificate. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1665590400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the SSL certificate.
     *
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the SSL certificate.
     *
     * @example test-sm2-cert-name
     *
     * @var string
     */
    public $name;

    /**
     * @description All domain names that are bound to the certificate.
     *
     * @var string[]
     */
    public $sans;

    /**
     * @description The beginning of the validity period of the SSL certificate. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1657551525000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'commonName' => 'CommonName',
        'endTime'    => 'EndTime',
        'id'         => 'Id',
        'name'       => 'Name',
        'sans'       => 'Sans',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SM2CertDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = $map['Sans'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
