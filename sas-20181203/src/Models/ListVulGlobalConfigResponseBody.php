<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulGlobalConfigResponseBody\vulGlobalConfigList;

class ListVulGlobalConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vulGlobalConfigList[]
     */
    public $vulGlobalConfigList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vulGlobalConfigList' => 'VulGlobalConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->vulGlobalConfigList)) {
            Model::validateArray($this->vulGlobalConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulGlobalConfigList) {
            if (\is_array($this->vulGlobalConfigList)) {
                $res['VulGlobalConfigList'] = [];
                $n1 = 0;
                foreach ($this->vulGlobalConfigList as $item1) {
                    $res['VulGlobalConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VulGlobalConfigList'])) {
            if (!empty($map['VulGlobalConfigList'])) {
                $model->vulGlobalConfigList = [];
                $n1 = 0;
                foreach ($map['VulGlobalConfigList'] as $item1) {
                    $model->vulGlobalConfigList[$n1] = vulGlobalConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
