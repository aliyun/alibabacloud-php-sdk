<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponse\firmwareInfo;
use AlibabaCloud\Tea\Model;

class ListOTAFirmwareResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;

    /**
     * @var firmwareInfo
     */
    public $firmwareInfo;
    protected $_name = [
        'code'         => 'Code',
        'currentPage'  => 'CurrentPage',
        'errorMessage' => 'ErrorMessage',
        'pageCount'    => 'PageCount',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'total'        => 'Total',
        'firmwareInfo' => 'FirmwareInfo',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('pageCount', $this->pageCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('firmwareInfo', $this->firmwareInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->firmwareInfo) {
            $res['FirmwareInfo'] = null !== $this->firmwareInfo ? $this->firmwareInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOTAFirmwareResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['FirmwareInfo'])) {
            $model->firmwareInfo = firmwareInfo::fromMap($map['FirmwareInfo']);
        }

        return $model;
    }
}
