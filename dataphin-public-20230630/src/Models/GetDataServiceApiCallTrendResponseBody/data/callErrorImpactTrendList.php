<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data;

use AlibabaCloud\Tea\Model;

class callErrorImpactTrendList extends Model
{
    /**
     * @var int[]
     */
    public $apiIdList;

    /**
     * @example 5
     *
     * @var int
     */
    public $errorApiCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $errorAppCount;

    /**
     * @example 2025-06-30 08:00
     *
     * @var string
     */
    public $minute;
    protected $_name = [
        'apiIdList' => 'ApiIdList',
        'errorApiCount' => 'ErrorApiCount',
        'errorAppCount' => 'ErrorAppCount',
        'minute' => 'Minute',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiIdList) {
            $res['ApiIdList'] = $this->apiIdList;
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

    /**
     * @param array $map
     *
     * @return callErrorImpactTrendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiIdList'])) {
            if (!empty($map['ApiIdList'])) {
                $model->apiIdList = $map['ApiIdList'];
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
