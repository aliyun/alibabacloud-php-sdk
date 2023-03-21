<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigResponseBody\moduleConfigList;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class GetModuleConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var moduleConfigList[]
     */
    public $moduleConfigList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'httpStatusCode'   => 'HttpStatusCode',
        'moduleConfigList' => 'ModuleConfigList',
        'pageInfo'         => 'PageInfo',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->moduleConfigList) {
            $res['ModuleConfigList'] = [];
            if (null !== $this->moduleConfigList && \is_array($this->moduleConfigList)) {
                $n = 0;
                foreach ($this->moduleConfigList as $item) {
                    $res['ModuleConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
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
     * @return GetModuleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ModuleConfigList'])) {
            if (!empty($map['ModuleConfigList'])) {
                $model->moduleConfigList = [];
                $n                       = 0;
                foreach ($map['ModuleConfigList'] as $item) {
                    $model->moduleConfigList[$n++] = null !== $item ? moduleConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
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
