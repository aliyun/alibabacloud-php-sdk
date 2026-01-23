<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardMappingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failedGuidList;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failedGuidList' => 'FailedGuidList',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedGuidList)) {
            Model::validateArray($this->failedGuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedGuidList) {
            if (\is_array($this->failedGuidList)) {
                $res['FailedGuidList'] = [];
                $n1 = 0;
                foreach ($this->failedGuidList as $item1) {
                    $res['FailedGuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['FailedGuidList'])) {
            if (!empty($map['FailedGuidList'])) {
                $model->failedGuidList = [];
                $n1 = 0;
                foreach ($map['FailedGuidList'] as $item1) {
                    $model->failedGuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
