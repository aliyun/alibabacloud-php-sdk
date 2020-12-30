<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class GetEndPointByDomainRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $domainURL;

    /**
     * @var string
     */
    public $regionID;
    protected $_name = [
        'regionId'  => 'RegionId',
        'domainURL' => 'DomainURL',
        'regionID'  => 'RegionID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->domainURL) {
            $res['DomainURL'] = $this->domainURL;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEndPointByDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DomainURL'])) {
            $model->domainURL = $map['DomainURL'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }

        return $model;
    }
}
