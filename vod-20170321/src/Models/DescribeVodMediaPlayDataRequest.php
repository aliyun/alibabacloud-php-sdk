<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodMediaPlayDataRequest extends Model
{
    /**
     * @example 9ae2af636ca6c10412f44891fc****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example PlaySuccessVv
     *
     * @var string
     */
    public $orderName;

    /**
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @example Android
     *
     * @var string
     */
    public $os;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 20240322
     *
     * @var string
     */
    public $playDate;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example Native
     *
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'mediaId'      => 'MediaId',
        'orderName'    => 'OrderName',
        'orderType'    => 'OrderType',
        'os'           => 'Os',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'playDate'     => 'PlayDate',
        'region'       => 'Region',
        'terminalType' => 'TerminalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playDate) {
            $res['PlayDate'] = $this->playDate;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodMediaPlayDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlayDate'])) {
            $model->playDate = $map['PlayDate'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
