<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInterAuthStatisticsZoneOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $refusedDomainCount;

    /**
     * @var int
     */
    public $suddenDropDomainCount;

    /**
     * @var int
     */
    public $suddenIncreaseDomainCount;
    protected $_name = [
        'refusedDomainCount' => 'RefusedDomainCount',
        'suddenDropDomainCount' => 'SuddenDropDomainCount',
        'suddenIncreaseDomainCount' => 'SuddenIncreaseDomainCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refusedDomainCount) {
            $res['RefusedDomainCount'] = $this->refusedDomainCount;
        }

        if (null !== $this->suddenDropDomainCount) {
            $res['SuddenDropDomainCount'] = $this->suddenDropDomainCount;
        }

        if (null !== $this->suddenIncreaseDomainCount) {
            $res['SuddenIncreaseDomainCount'] = $this->suddenIncreaseDomainCount;
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
        if (isset($map['RefusedDomainCount'])) {
            $model->refusedDomainCount = $map['RefusedDomainCount'];
        }

        if (isset($map['SuddenDropDomainCount'])) {
            $model->suddenDropDomainCount = $map['SuddenDropDomainCount'];
        }

        if (isset($map['SuddenIncreaseDomainCount'])) {
            $model->suddenIncreaseDomainCount = $map['SuddenIncreaseDomainCount'];
        }

        return $model;
    }
}
