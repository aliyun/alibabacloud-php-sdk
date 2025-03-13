<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLPreCheckDetailResponseBody\preCheckSQLDetailList;
use AlibabaCloud\Tea\Model;

class ListDataImportSQLPreCheckDetailResponseBody extends Model
{
    /**
     * @description The error code returned if the request failed.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The precheck information of SQL statements.
     *
     * @var preCheckSQLDetailList[]
     */
    public $preCheckSQLDetailList;

    /**
     * @description The request ID. You can use the ID to locate logs and troubleshoot issues.
     *
     * @example 31853A2B-DC9D-5B39-8492-D2AC8BCF550E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of SQL statements.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'preCheckSQLDetailList' => 'PreCheckSQLDetailList',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->preCheckSQLDetailList) {
            $res['PreCheckSQLDetailList'] = [];
            if (null !== $this->preCheckSQLDetailList && \is_array($this->preCheckSQLDetailList)) {
                $n = 0;
                foreach ($this->preCheckSQLDetailList as $item) {
                    $res['PreCheckSQLDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataImportSQLPreCheckDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PreCheckSQLDetailList'])) {
            if (!empty($map['PreCheckSQLDetailList'])) {
                $model->preCheckSQLDetailList = [];
                $n = 0;
                foreach ($map['PreCheckSQLDetailList'] as $item) {
                    $model->preCheckSQLDetailList[$n++] = null !== $item ? preCheckSQLDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
