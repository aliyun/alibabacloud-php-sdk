<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDataLakeCatalogResponseBody extends Model
{
    /**
     * @var DLCatalog[]
     */
    public $cataLogList;

    /**
     * @example 400
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example E76DD2E7-EBAC-5724-B163-19AAC233F8F2
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
    protected $_name = [
        'cataLogList' => 'CataLogList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cataLogList) {
            $res['CataLogList'] = [];
            if (null !== $this->cataLogList && \is_array($this->cataLogList)) {
                $n = 0;
                foreach ($this->cataLogList as $item) {
                    $res['CataLogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLakeCatalogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CataLogList'])) {
            if (!empty($map['CataLogList'])) {
                $model->cataLogList = [];
                $n = 0;
                foreach ($map['CataLogList'] as $item) {
                    $model->cataLogList[$n++] = null !== $item ? DLCatalog::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
