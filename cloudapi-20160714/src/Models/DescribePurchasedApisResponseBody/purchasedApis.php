<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponseBody\purchasedApis\purchasedApi;

class purchasedApis extends Model
{
    /**
     * @var purchasedApi[]
     */
    public $purchasedApi;
    protected $_name = [
        'purchasedApi' => 'PurchasedApi',
    ];

    public function validate()
    {
        if (\is_array($this->purchasedApi)) {
            Model::validateArray($this->purchasedApi);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->purchasedApi) {
            if (\is_array($this->purchasedApi)) {
                $res['PurchasedApi'] = [];
                $n1 = 0;
                foreach ($this->purchasedApi as $item1) {
                    $res['PurchasedApi'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PurchasedApi'])) {
            if (!empty($map['PurchasedApi'])) {
                $model->purchasedApi = [];
                $n1 = 0;
                foreach ($map['PurchasedApi'] as $item1) {
                    $model->purchasedApi[$n1++] = purchasedApi::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
