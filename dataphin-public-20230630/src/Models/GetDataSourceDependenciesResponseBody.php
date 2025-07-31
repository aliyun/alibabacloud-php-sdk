<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataSourceDependenciesResponseBody\dependencyList;
use AlibabaCloud\Tea\Model;

class GetDataSourceDependenciesResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var dependencyList[]
     */
    public $dependencyList;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example internal error
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 82E78D6B-AA8F-1FEF-8AA3-5C9DA2A79140
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'dependencyList' => 'DependencyList',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dependencyList) {
            $res['DependencyList'] = [];
            if (null !== $this->dependencyList && \is_array($this->dependencyList)) {
                $n = 0;
                foreach ($this->dependencyList as $item) {
                    $res['DependencyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return GetDataSourceDependenciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DependencyList'])) {
            if (!empty($map['DependencyList'])) {
                $model->dependencyList = [];
                $n = 0;
                foreach ($map['DependencyList'] as $item) {
                    $model->dependencyList[$n++] = null !== $item ? dependencyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
