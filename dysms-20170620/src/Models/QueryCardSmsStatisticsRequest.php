<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryCardSmsStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $customTmpCode;

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
    public $sendDateEnd;

    /**
     * @var string
     */
    public $sendDateStart;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var string
     */
    public $tmpName;
    protected $_name = [
        'customTmpCode' => 'CustomTmpCode',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sendDateEnd' => 'SendDateEnd',
        'sendDateStart' => 'SendDateStart',
        'signName' => 'SignName',
        'tmpCode' => 'TmpCode',
        'tmpName' => 'TmpName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTmpCode) {
            $res['CustomTmpCode'] = $this->customTmpCode;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sendDateEnd) {
            $res['SendDateEnd'] = $this->sendDateEnd;
        }

        if (null !== $this->sendDateStart) {
            $res['SendDateStart'] = $this->sendDateStart;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->tmpName) {
            $res['TmpName'] = $this->tmpName;
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
        if (isset($map['CustomTmpCode'])) {
            $model->customTmpCode = $map['CustomTmpCode'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SendDateEnd'])) {
            $model->sendDateEnd = $map['SendDateEnd'];
        }

        if (isset($map['SendDateStart'])) {
            $model->sendDateStart = $map['SendDateStart'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['TmpName'])) {
            $model->tmpName = $map['TmpName'];
        }

        return $model;
    }
}
