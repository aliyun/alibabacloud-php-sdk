<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigResponseBody\moduleConfigList;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigResponseBody\pageInfo;

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
        if (\is_array($this->moduleConfigList)) {
            Model::validateArray($this->moduleConfigList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->moduleConfigList) {
            if (\is_array($this->moduleConfigList)) {
                $res['ModuleConfigList'] = [];
                $n1                      = 0;
                foreach ($this->moduleConfigList as $item1) {
                    $res['ModuleConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['ModuleConfigList'])) {
            if (!empty($map['ModuleConfigList'])) {
                $model->moduleConfigList = [];
                $n1                      = 0;
                foreach ($map['ModuleConfigList'] as $item1) {
                    $model->moduleConfigList[$n1++] = moduleConfigList::fromMap($item1);
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
