<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebLockFileEventsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $tsBegin;

    /**
     * @var int
     */
    public $tsEnd;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'dealed'      => 'Dealed',
        'pageSize'    => 'PageSize',
        'processName' => 'ProcessName',
        'remark'      => 'Remark',
        'tsBegin'     => 'TsBegin',
        'tsEnd'       => 'TsEnd',
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
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->tsBegin) {
            $res['TsBegin'] = $this->tsBegin;
        }
        if (null !== $this->tsEnd) {
            $res['TsEnd'] = $this->tsEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebLockFileEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TsBegin'])) {
            $model->tsBegin = $map['TsBegin'];
        }
        if (isset($map['TsEnd'])) {
            $model->tsEnd = $map['TsEnd'];
        }

        return $model;
    }
}
