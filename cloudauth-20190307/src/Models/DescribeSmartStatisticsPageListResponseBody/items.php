<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSmartStatisticsPageListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 11/8
     *
     * @var string
     */
    public $date;

    /**
     * @example 25
     *
     * @var string
     */
    public $passRate;

    /**
     * @example SMART_VERIFY
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 20**40
     *
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @example 1
     *
     * @var int
     */
    public $successCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'date'         => 'Date',
        'passRate'     => 'PassRate',
        'productCode'  => 'ProductCode',
        'sceneId'      => 'SceneId',
        'sceneName'    => 'SceneName',
        'successCount' => 'SuccessCount',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
