<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListV2ResponseBody\itemList\item\skuList\sku\gradePriceModels\gradePriceModel;

use AlibabaCloud\Tea\Model;

class userLabelList extends Model
{
    /**
     * @var string[]
     */
    public $userLabelList;
    protected $_name = [
        'userLabelList' => 'UserLabelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userLabelList) {
            $res['UserLabelList'] = $this->userLabelList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userLabelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserLabelList'])) {
            if (!empty($map['UserLabelList'])) {
                $model->userLabelList = $map['UserLabelList'];
            }
        }

        return $model;
    }
}
