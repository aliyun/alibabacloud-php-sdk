<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistResponseBody\vulWhitelistList;

class ModifyCreateVulWhitelistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vulWhitelistList[]
     */
    public $vulWhitelistList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vulWhitelistList' => 'VulWhitelistList',
    ];

    public function validate()
    {
        if (\is_array($this->vulWhitelistList)) {
            Model::validateArray($this->vulWhitelistList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulWhitelistList) {
            if (\is_array($this->vulWhitelistList)) {
                $res['VulWhitelistList'] = [];
                $n1 = 0;
                foreach ($this->vulWhitelistList as $item1) {
                    $res['VulWhitelistList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VulWhitelistList'])) {
            if (!empty($map['VulWhitelistList'])) {
                $model->vulWhitelistList = [];
                $n1 = 0;
                foreach ($map['VulWhitelistList'] as $item1) {
                    $model->vulWhitelistList[$n1] = vulWhitelistList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
