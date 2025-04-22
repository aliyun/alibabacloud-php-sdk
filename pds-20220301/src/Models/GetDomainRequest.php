<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetDomainRequest extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var bool
     */
    public $getQuotaUsed;
    protected $_name = [
        'domainId' => 'domain_id',
        'fields' => 'fields',
        'getQuotaUsed' => 'get_quota_used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }

        if (null !== $this->getQuotaUsed) {
            $res['get_quota_used'] = $this->getQuotaUsed;
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
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['fields'])) {
            $model->fields = $map['fields'];
        }

        if (isset($map['get_quota_used'])) {
            $model->getQuotaUsed = $map['get_quota_used'];
        }

        return $model;
    }
}
