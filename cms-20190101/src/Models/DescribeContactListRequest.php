<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeContactListRequest extends Model
{
    /**
     * @var string
     */
    public $chanelType;

    /**
     * @var string
     */
    public $chanelValue;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'chanelType'  => 'ChanelType',
        'chanelValue' => 'ChanelValue',
        'contactName' => 'ContactName',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chanelType) {
            $res['ChanelType'] = $this->chanelType;
        }
        if (null !== $this->chanelValue) {
            $res['ChanelValue'] = $this->chanelValue;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContactListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChanelType'])) {
            $model->chanelType = $map['ChanelType'];
        }
        if (isset($map['ChanelValue'])) {
            $model->chanelValue = $map['ChanelValue'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
