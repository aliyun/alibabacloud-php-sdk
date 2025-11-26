<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class privateDnsRegionList extends Model
{
    /**
     * @var int
     */
    public $domainNameCount;

    /**
     * @var int
     */
    public $newDomainNameCount;

    /**
     * @var int
     */
    public $privateDnsCount;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'domainNameCount' => 'DomainNameCount',
        'newDomainNameCount' => 'NewDomainNameCount',
        'privateDnsCount' => 'PrivateDnsCount',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNameCount) {
            $res['DomainNameCount'] = $this->domainNameCount;
        }

        if (null !== $this->newDomainNameCount) {
            $res['NewDomainNameCount'] = $this->newDomainNameCount;
        }

        if (null !== $this->privateDnsCount) {
            $res['PrivateDnsCount'] = $this->privateDnsCount;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['DomainNameCount'])) {
            $model->domainNameCount = $map['DomainNameCount'];
        }

        if (isset($map['NewDomainNameCount'])) {
            $model->newDomainNameCount = $map['NewDomainNameCount'];
        }

        if (isset($map['PrivateDnsCount'])) {
            $model->privateDnsCount = $map['PrivateDnsCount'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
