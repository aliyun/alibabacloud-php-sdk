<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsResponseBody;

use AlibabaCloud\Tea\Model;

class certs extends Model
{
    /**
     * @var string
     */
    public $common;

    /**
     * @var bool
     */
    public $domainRelated;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'common'        => 'Common',
        'domainRelated' => 'DomainRelated',
        'endDate'       => 'EndDate',
        'id'            => 'Id',
        'issuer'        => 'Issuer',
        'name'          => 'Name',
        'startDate'     => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->domainRelated) {
            $res['DomainRelated'] = $this->domainRelated;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['DomainRelated'])) {
            $model->domainRelated = $map['DomainRelated'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
