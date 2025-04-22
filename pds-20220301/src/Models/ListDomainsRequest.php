<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListDomainsRequest extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $parentDomainId;

    /**
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'limit' => 'limit',
        'marker' => 'marker',
        'parentDomainId' => 'parent_domain_id',
        'serviceCode' => 'service_code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->parentDomainId) {
            $res['parent_domain_id'] = $this->parentDomainId;
        }

        if (null !== $this->serviceCode) {
            $res['service_code'] = $this->serviceCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['parent_domain_id'])) {
            $model->parentDomainId = $map['parent_domain_id'];
        }

        if (isset($map['service_code'])) {
            $model->serviceCode = $map['service_code'];
        }

        return $model;
    }
}
