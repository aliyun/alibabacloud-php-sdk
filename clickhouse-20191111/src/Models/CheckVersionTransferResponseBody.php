<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckVersionTransferResponseBody\checkAccess;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckVersionTransferResponseBody\checkCode;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckVersionTransferResponseBody\checkStatus;
use AlibabaCloud\Tea\Model;

class CheckVersionTransferResponseBody extends Model
{
    /**
     * @var checkAccess
     */
    public $checkAccess;

    /**
     * @var bool
     */
    public $checkCategory;

    /**
     * @var checkCode
     */
    public $checkCode;

    /**
     * @var bool
     */
    public $checkConnection;

    /**
     * @var checkStatus
     */
    public $checkStatus;

    /**
     * @var bool
     */
    public $checkStorage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timeDuration;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkAccess'     => 'CheckAccess',
        'checkCategory'   => 'CheckCategory',
        'checkCode'       => 'CheckCode',
        'checkConnection' => 'CheckConnection',
        'checkStatus'     => 'CheckStatus',
        'checkStorage'    => 'CheckStorage',
        'requestId'       => 'RequestId',
        'timeDuration'    => 'TimeDuration',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkAccess) {
            $res['CheckAccess'] = null !== $this->checkAccess ? $this->checkAccess->toMap() : null;
        }
        if (null !== $this->checkCategory) {
            $res['CheckCategory'] = $this->checkCategory;
        }
        if (null !== $this->checkCode) {
            $res['CheckCode'] = null !== $this->checkCode ? $this->checkCode->toMap() : null;
        }
        if (null !== $this->checkConnection) {
            $res['CheckConnection'] = $this->checkConnection;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = null !== $this->checkStatus ? $this->checkStatus->toMap() : null;
        }
        if (null !== $this->checkStorage) {
            $res['CheckStorage'] = $this->checkStorage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeDuration) {
            $res['TimeDuration'] = $this->timeDuration;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckVersionTransferResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckAccess'])) {
            $model->checkAccess = checkAccess::fromMap($map['CheckAccess']);
        }
        if (isset($map['CheckCategory'])) {
            $model->checkCategory = $map['CheckCategory'];
        }
        if (isset($map['CheckCode'])) {
            $model->checkCode = checkCode::fromMap($map['CheckCode']);
        }
        if (isset($map['CheckConnection'])) {
            $model->checkConnection = $map['CheckConnection'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = checkStatus::fromMap($map['CheckStatus']);
        }
        if (isset($map['CheckStorage'])) {
            $model->checkStorage = $map['CheckStorage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeDuration'])) {
            $model->timeDuration = $map['TimeDuration'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
