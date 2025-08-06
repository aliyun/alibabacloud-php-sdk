<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDRMCertInfoResponseBody\DRMCertInfoList;

class ListDRMCertInfoResponseBody extends Model
{
    /**
     * @var DRMCertInfoList[]
     */
    public $DRMCertInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DRMCertInfoList' => 'DRMCertInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DRMCertInfoList)) {
            Model::validateArray($this->DRMCertInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DRMCertInfoList) {
            if (\is_array($this->DRMCertInfoList)) {
                $res['DRMCertInfoList'] = [];
                $n1 = 0;
                foreach ($this->DRMCertInfoList as $item1) {
                    $res['DRMCertInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DRMCertInfoList'])) {
            if (!empty($map['DRMCertInfoList'])) {
                $model->DRMCertInfoList = [];
                $n1 = 0;
                foreach ($map['DRMCertInfoList'] as $item1) {
                    $model->DRMCertInfoList[$n1] = DRMCertInfoList::fromMap($item1);
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
