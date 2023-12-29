<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponseBody\data;

use AlibabaCloud\Tea\Model;

class sceneBillingList extends Model
{
    /**
     * @description The billable items.
     *
     * @example 74
     *
     * @var string
     */
    public $add;

    /**
     * @description The fees generated for the verification service. Unitrogen: CNY.
     *
     * @example 1.48
     *
     * @var string
     */
    public $amount;

    /**
     * @description The application name.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $appName;

    /**
     * @description The verification method.
     *
     * @example Verification of local phone number
     *
     * @var string
     */
    public $itemName;

    /**
     * @description The service code.
     *
     * @example FC100000038194004
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The service name.
     *
     * @example Alibaba Cloud Communications
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description The unit price. Unit: CNY.
     *
     * @example 0.02
     *
     * @var string
     */
    public $singlePrice;
    protected $_name = [
        'add'         => 'Add',
        'amount'      => 'Amount',
        'appName'     => 'AppName',
        'itemName'    => 'ItemName',
        'sceneCode'   => 'SceneCode',
        'sceneName'   => 'SceneName',
        'singlePrice' => 'SinglePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->add) {
            $res['Add'] = $this->add;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->singlePrice) {
            $res['SinglePrice'] = $this->singlePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneBillingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Add'])) {
            $model->add = $map['Add'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SinglePrice'])) {
            $model->singlePrice = $map['SinglePrice'];
        }

        return $model;
    }
}
