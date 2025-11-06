<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceRequest;

use AlibabaCloud\Dara\Model;

class domainItem extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $suffix;
    protected $_name = [
        'action' => 'Action',
        'domainName' => 'DomainName',
        'period' => 'Period',
        'suffix' => 'Suffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        return $model;
    }
}
