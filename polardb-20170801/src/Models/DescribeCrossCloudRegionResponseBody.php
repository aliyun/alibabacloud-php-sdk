<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudRegionResponseBody\crossCloudRegionList;

class DescribeCrossCloudRegionResponseBody extends Model
{
    /**
     * @var crossCloudRegionList[]
     */
    public $crossCloudRegionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'crossCloudRegionList' => 'CrossCloudRegionList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->crossCloudRegionList)) {
            Model::validateArray($this->crossCloudRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossCloudRegionList) {
            if (\is_array($this->crossCloudRegionList)) {
                $res['CrossCloudRegionList'] = [];
                $n1 = 0;
                foreach ($this->crossCloudRegionList as $item1) {
                    $res['CrossCloudRegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CrossCloudRegionList'])) {
            if (!empty($map['CrossCloudRegionList'])) {
                $model->crossCloudRegionList = [];
                $n1 = 0;
                foreach ($map['CrossCloudRegionList'] as $item1) {
                    $model->crossCloudRegionList[$n1] = crossCloudRegionList::fromMap($item1);
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
