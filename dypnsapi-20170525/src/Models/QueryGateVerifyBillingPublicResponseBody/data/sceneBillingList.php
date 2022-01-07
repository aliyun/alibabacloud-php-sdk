<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponseBody\data;

use AlibabaCloud\Tea\Model;

class sceneBillingList extends Model
{
    /**
     * @var string
     */
    public $add;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $sceneName;

    /**
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
