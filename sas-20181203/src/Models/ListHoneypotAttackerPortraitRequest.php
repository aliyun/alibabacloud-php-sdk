<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotAttackerPortraitRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1672285044000
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 101.133.155.***
     *
     * @var string
     */
    public $srcIp;

    /**
     * @example 1672249044000
     *
     * @var int
     */
    public $startTimeStamp;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'endTimeStamp'   => 'EndTimeStamp',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'srcIp'          => 'SrcIp',
        'startTimeStamp' => 'StartTimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotAttackerPortraitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }

        return $model;
    }
}
