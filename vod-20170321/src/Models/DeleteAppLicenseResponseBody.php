<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppLicenseResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedLicenseItemIdList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedLicenseItemIdList' => 'FailedLicenseItemIdList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedLicenseItemIdList)) {
            Model::validateArray($this->failedLicenseItemIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedLicenseItemIdList) {
            if (\is_array($this->failedLicenseItemIdList)) {
                $res['FailedLicenseItemIdList'] = [];
                $n1 = 0;
                foreach ($this->failedLicenseItemIdList as $item1) {
                    $res['FailedLicenseItemIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailedLicenseItemIdList'])) {
            if (!empty($map['FailedLicenseItemIdList'])) {
                $model->failedLicenseItemIdList = [];
                $n1 = 0;
                foreach ($map['FailedLicenseItemIdList'] as $item1) {
                    $model->failedLicenseItemIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
