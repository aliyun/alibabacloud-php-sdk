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

use AlibabaCloud\Tea\Model;

class ListDataLakeTablebaseInfoResponseBody extends Model
{
    /**
     * @example 400
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Specified parameter Rows is not valid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example B43AD641-49C2-5299-9E06-1B37EC1B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var DLTablebaseInfo[]
     */
    public $tablebaseInfoList;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'tablebaseInfoList' => 'TablebaseInfoList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tablebaseInfoList) {
            $res['TablebaseInfoList'] = [];
            if (null !== $this->tablebaseInfoList && \is_array($this->tablebaseInfoList)) {
                $n = 0;
                foreach ($this->tablebaseInfoList as $item) {
                    $res['TablebaseInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLakeTablebaseInfoResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TablebaseInfoList'])) {
            if (!empty($map['TablebaseInfoList'])) {
                $model->tablebaseInfoList = [];
                $n = 0;
                foreach ($map['TablebaseInfoList'] as $item) {
                    $model->tablebaseInfoList[$n++] = null !== $item ? DLTablebaseInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
