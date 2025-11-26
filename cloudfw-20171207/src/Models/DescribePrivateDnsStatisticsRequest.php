<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribePrivateDnsStatisticsRequest extends Model
{
    /**
     * @var int
     */
    public $domainNameCreatedEndTime;

    /**
     * @var int
     */
    public $domainNameCreatedStartTime;
    protected $_name = [
        'domainNameCreatedEndTime' => 'DomainNameCreatedEndTime',
        'domainNameCreatedStartTime' => 'DomainNameCreatedStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNameCreatedEndTime) {
            $res['DomainNameCreatedEndTime'] = $this->domainNameCreatedEndTime;
        }

        if (null !== $this->domainNameCreatedStartTime) {
            $res['DomainNameCreatedStartTime'] = $this->domainNameCreatedStartTime;
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
        if (isset($map['DomainNameCreatedEndTime'])) {
            $model->domainNameCreatedEndTime = $map['DomainNameCreatedEndTime'];
        }

        if (isset($map['DomainNameCreatedStartTime'])) {
            $model->domainNameCreatedStartTime = $map['DomainNameCreatedStartTime'];
        }

        return $model;
    }
}
