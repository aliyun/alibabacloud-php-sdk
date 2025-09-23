<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudLevelsResponseBody\crossCloudLevelList;

class DescribeCrossCloudLevelsResponseBody extends Model
{
    /**
     * @var crossCloudLevelList[]
     */
    public $crossCloudLevelList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'crossCloudLevelList' => 'CrossCloudLevelList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->crossCloudLevelList)) {
            Model::validateArray($this->crossCloudLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossCloudLevelList) {
            if (\is_array($this->crossCloudLevelList)) {
                $res['CrossCloudLevelList'] = [];
                $n1 = 0;
                foreach ($this->crossCloudLevelList as $item1) {
                    $res['CrossCloudLevelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CrossCloudLevelList'])) {
            if (!empty($map['CrossCloudLevelList'])) {
                $model->crossCloudLevelList = [];
                $n1 = 0;
                foreach ($map['CrossCloudLevelList'] as $item1) {
                    $model->crossCloudLevelList[$n1] = crossCloudLevelList::fromMap($item1);
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
