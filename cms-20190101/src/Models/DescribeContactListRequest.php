<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeContactListRequest extends Model
{
    /**
     * @description The alert notification method. Valid values:
     *
     *   Mail: emails
     *   DingWebHook: DingTalk chatbots
     *
     * @example Mail
     *
     * @var string
     */
    public $chanelType;

    /**
     * @description The value specified for the alert notification method.
     *
     * >  This parameter is required only if you set the `ChanelType` parameter to `Mail`.
     * @example Alice@example.com
     *
     * @var string
     */
    public $chanelValue;

    /**
     * @description The name of the alert contact.
     *
     * @example Alice
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 100.
     * @example 10
     *
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
