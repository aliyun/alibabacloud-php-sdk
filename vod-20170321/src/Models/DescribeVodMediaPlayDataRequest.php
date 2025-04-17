<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DescribeVodMediaPlayDataRequest extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $playDate;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'mediaId' => 'MediaId',
        'orderName' => 'OrderName',
        'orderType' => 'OrderType',
        'os' => 'Os',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'playDate' => 'PlayDate',
        'region' => 'Region',
        'terminalType' => 'TerminalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
