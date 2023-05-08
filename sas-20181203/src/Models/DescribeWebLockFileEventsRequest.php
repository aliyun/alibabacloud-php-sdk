<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebLockFileEventsRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the event on web tamper proofing is handled. Valid values:
     *
     *   **n**: The event on web tamper proofing is handled.
     *   **y**: The event on web tamper proofing is not handled.
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the process.
     *
     * @example sys_create
     *
     * @var string
     */
    public $processName;

    /**
     * @description The name of the asset.
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the names of assets.
     * @example test-ecs
     *
     * @var string
     */
    public $remark;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp.
     *
     * @example 1660649981419
     *
     * @var int
     */
    public $tsBegin;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp.
     *
     * @example 1660649981419
     *
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
