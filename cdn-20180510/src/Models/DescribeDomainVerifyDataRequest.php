<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainVerifyDataRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $globalResourcePlan;
    protected $_name = [
        'domainName' => 'DomainName',
        'globalResourcePlan' => 'GlobalResourcePlan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->globalResourcePlan) {
            $res['GlobalResourcePlan'] = $this->globalResourcePlan;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GlobalResourcePlan'])) {
            $model->globalResourcePlan = $map['GlobalResourcePlan'];
        }

        return $model;
    }
}
