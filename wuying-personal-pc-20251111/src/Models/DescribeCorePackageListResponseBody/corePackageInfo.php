<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponseBody\corePackageInfo\corePackageList;

class corePackageInfo extends Model
{
    /**
     * @var corePackageList[]
     */
    public $corePackageList;

    /**
     * @var float
     */
    public $summaryRemainingCoreHours;
    protected $_name = [
        'corePackageList' => 'CorePackageList',
        'summaryRemainingCoreHours' => 'SummaryRemainingCoreHours',
    ];

    public function validate()
    {
        if (\is_array($this->corePackageList)) {
            Model::validateArray($this->corePackageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corePackageList) {
            if (\is_array($this->corePackageList)) {
                $res['CorePackageList'] = [];
                $n1 = 0;
                foreach ($this->corePackageList as $item1) {
                    $res['CorePackageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summaryRemainingCoreHours) {
            $res['SummaryRemainingCoreHours'] = $this->summaryRemainingCoreHours;
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
        if (isset($map['CorePackageList'])) {
            if (!empty($map['CorePackageList'])) {
                $model->corePackageList = [];
                $n1 = 0;
                foreach ($map['CorePackageList'] as $item1) {
                    $model->corePackageList[$n1] = corePackageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SummaryRemainingCoreHours'])) {
            $model->summaryRemainingCoreHours = $map['SummaryRemainingCoreHours'];
        }

        return $model;
    }
}
