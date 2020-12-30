<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetReportResponseBody\result;

use AlibabaCloud\Tea\Model;

class overall extends Model
{
    /**
     * @var float
     */
    public $userRepetitiveRate;

    /**
     * @var int
     */
    public $userUserCount;

    /**
     * @var int
     */
    public $bhvCount;

    /**
     * @var float
     */
    public $bhvLegalRate;

    /**
     * @var float
     */
    public $userCompleteRate;

    /**
     * @var float
     */
    public $userLoginRate;

    /**
     * @var float
     */
    public $itemCompleteRate;

    /**
     * @var float
     */
    public $itemRepetitiveRate;

    /**
     * @var int
     */
    public $itemItemCount;

    /**
     * @var float
     */
    public $userLegalRate;

    /**
     * @var float
     */
    public $itemLegalRate;

    /**
     * @var float
     */
    public $itemLoginRate;
    protected $_name = [
        'userRepetitiveRate' => 'UserRepetitiveRate',
        'userUserCount'      => 'UserUserCount',
        'bhvCount'           => 'BhvCount',
        'bhvLegalRate'       => 'BhvLegalRate',
        'userCompleteRate'   => 'UserCompleteRate',
        'userLoginRate'      => 'UserLoginRate',
        'itemCompleteRate'   => 'ItemCompleteRate',
        'itemRepetitiveRate' => 'ItemRepetitiveRate',
        'itemItemCount'      => 'ItemItemCount',
        'userLegalRate'      => 'UserLegalRate',
        'itemLegalRate'      => 'ItemLegalRate',
        'itemLoginRate'      => 'ItemLoginRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userRepetitiveRate) {
            $res['UserRepetitiveRate'] = $this->userRepetitiveRate;
        }
        if (null !== $this->userUserCount) {
            $res['UserUserCount'] = $this->userUserCount;
        }
        if (null !== $this->bhvCount) {
            $res['BhvCount'] = $this->bhvCount;
        }
        if (null !== $this->bhvLegalRate) {
            $res['BhvLegalRate'] = $this->bhvLegalRate;
        }
        if (null !== $this->userCompleteRate) {
            $res['UserCompleteRate'] = $this->userCompleteRate;
        }
        if (null !== $this->userLoginRate) {
            $res['UserLoginRate'] = $this->userLoginRate;
        }
        if (null !== $this->itemCompleteRate) {
            $res['ItemCompleteRate'] = $this->itemCompleteRate;
        }
        if (null !== $this->itemRepetitiveRate) {
            $res['ItemRepetitiveRate'] = $this->itemRepetitiveRate;
        }
        if (null !== $this->itemItemCount) {
            $res['ItemItemCount'] = $this->itemItemCount;
        }
        if (null !== $this->userLegalRate) {
            $res['UserLegalRate'] = $this->userLegalRate;
        }
        if (null !== $this->itemLegalRate) {
            $res['ItemLegalRate'] = $this->itemLegalRate;
        }
        if (null !== $this->itemLoginRate) {
            $res['ItemLoginRate'] = $this->itemLoginRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overall
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserRepetitiveRate'])) {
            $model->userRepetitiveRate = $map['UserRepetitiveRate'];
        }
        if (isset($map['UserUserCount'])) {
            $model->userUserCount = $map['UserUserCount'];
        }
        if (isset($map['BhvCount'])) {
            $model->bhvCount = $map['BhvCount'];
        }
        if (isset($map['BhvLegalRate'])) {
            $model->bhvLegalRate = $map['BhvLegalRate'];
        }
        if (isset($map['UserCompleteRate'])) {
            $model->userCompleteRate = $map['UserCompleteRate'];
        }
        if (isset($map['UserLoginRate'])) {
            $model->userLoginRate = $map['UserLoginRate'];
        }
        if (isset($map['ItemCompleteRate'])) {
            $model->itemCompleteRate = $map['ItemCompleteRate'];
        }
        if (isset($map['ItemRepetitiveRate'])) {
            $model->itemRepetitiveRate = $map['ItemRepetitiveRate'];
        }
        if (isset($map['ItemItemCount'])) {
            $model->itemItemCount = $map['ItemItemCount'];
        }
        if (isset($map['UserLegalRate'])) {
            $model->userLegalRate = $map['UserLegalRate'];
        }
        if (isset($map['ItemLegalRate'])) {
            $model->itemLegalRate = $map['ItemLegalRate'];
        }
        if (isset($map['ItemLoginRate'])) {
            $model->itemLoginRate = $map['ItemLoginRate'];
        }

        return $model;
    }
}
