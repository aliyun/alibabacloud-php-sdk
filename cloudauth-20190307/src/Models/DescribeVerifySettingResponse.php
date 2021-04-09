<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySettingResponse\verifySettingList;
use AlibabaCloud\Tea\Model;

class DescribeVerifySettingResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var verifySettingList[]
     */
    public $verifySettingList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'verifySettingList' => 'VerifySettingList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('verifySettingList', $this->verifySettingList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifySettingList) {
            $res['VerifySettingList'] = [];
            if (null !== $this->verifySettingList && \is_array($this->verifySettingList)) {
                $n = 0;
                foreach ($this->verifySettingList as $item) {
                    $res['VerifySettingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifySettingResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifySettingList'])) {
            if (!empty($map['VerifySettingList'])) {
                $model->verifySettingList = [];
                $n                        = 0;
                foreach ($map['VerifySettingList'] as $item) {
                    $model->verifySettingList[$n++] = null !== $item ? verifySettingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
