<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainResponseBody;

use AlibabaCloud\Dara\Model;

class domainInfo extends Model
{
    /**
     * @var string
     */
    public $cname;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $domainId;
    protected $_name = [
        'cname'    => 'Cname',
        'domain'   => 'Domain',
        'domainId' => 'DomainId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
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
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        return $model;
    }
}
