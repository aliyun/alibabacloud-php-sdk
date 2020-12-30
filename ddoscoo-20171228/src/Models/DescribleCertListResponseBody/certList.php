<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleCertListResponseBody;

use AlibabaCloud\Tea\Model;

class certList extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $domainRelated;

    /**
     * @var string
     */
    public $startDate;

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
    public $common;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'endDate'       => 'EndDate',
        'domainRelated' => 'DomainRelated',
        'startDate'     => 'StartDate',
        'issuer'        => 'Issuer',
        'name'          => 'Name',
        'common'        => 'Common',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->domainRelated) {
            $res['DomainRelated'] = $this->domainRelated;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['DomainRelated'])) {
            $model->domainRelated = $map['DomainRelated'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
