<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data;

use AlibabaCloud\Dara\Model;

class callErrorImpactTrendList extends Model
{
    /**
     * @var int[]
     */
    public $apiIdList;

    /**
     * @var int
     */
    public $errorApiCount;

    /**
     * @var int
     */
    public $errorAppCount;

    /**
     * @var string
     */
    public $minute;
    protected $_name = [
        'apiIdList' => 'ApiIdList',
        'errorApiCount' => 'ErrorApiCount',
        'errorAppCount' => 'ErrorAppCount',
        'minute' => 'Minute',
    ];

    public function validate()
    {
        if (\is_array($this->apiIdList)) {
            Model::validateArray($this->apiIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIdList) {
            if (\is_array($this->apiIdList)) {
                $res['ApiIdList'] = [];
                $n1 = 0;
                foreach ($this->apiIdList as $item1) {
                    $res['ApiIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorApiCount) {
            $res['ErrorApiCount'] = $this->errorApiCount;
        }

        if (null !== $this->errorAppCount) {
            $res['ErrorAppCount'] = $this->errorAppCount;
        }

        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
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
        if (isset($map['ApiIdList'])) {
            if (!empty($map['ApiIdList'])) {
                $model->apiIdList = [];
                $n1 = 0;
                foreach ($map['ApiIdList'] as $item1) {
                    $model->apiIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorApiCount'])) {
            $model->errorApiCount = $map['ErrorApiCount'];
        }

        if (isset($map['ErrorAppCount'])) {
            $model->errorAppCount = $map['ErrorAppCount'];
        }

        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        return $model;
    }
}
