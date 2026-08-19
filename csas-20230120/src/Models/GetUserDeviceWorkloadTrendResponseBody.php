<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceWorkloadTrendResponseBody\workloadList;

class GetUserDeviceWorkloadTrendResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $titleEn;

    /**
     * @var string
     */
    public $titleZh;

    /**
     * @var workloadList[]
     */
    public $workloadList;
    protected $_name = [
        'requestId' => 'RequestId',
        'titleEn' => 'TitleEn',
        'titleZh' => 'TitleZh',
        'workloadList' => 'WorkloadList',
    ];

    public function validate()
    {
        if (\is_array($this->workloadList)) {
            Model::validateArray($this->workloadList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->titleEn) {
            $res['TitleEn'] = $this->titleEn;
        }

        if (null !== $this->titleZh) {
            $res['TitleZh'] = $this->titleZh;
        }

        if (null !== $this->workloadList) {
            if (\is_array($this->workloadList)) {
                $res['WorkloadList'] = [];
                $n1 = 0;
                foreach ($this->workloadList as $item1) {
                    $res['WorkloadList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TitleEn'])) {
            $model->titleEn = $map['TitleEn'];
        }

        if (isset($map['TitleZh'])) {
            $model->titleZh = $map['TitleZh'];
        }

        if (isset($map['WorkloadList'])) {
            if (!empty($map['WorkloadList'])) {
                $model->workloadList = [];
                $n1 = 0;
                foreach ($map['WorkloadList'] as $item1) {
                    $model->workloadList[$n1] = workloadList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
