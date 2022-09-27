<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemGroupDetailsResponseBody;

use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemGroupDetailsResponseBody\subscriptionItemGroupDetails\itemDetails;
use AlibabaCloud\Tea\Model;

class subscriptionItemGroupDetails extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var itemDetails[]
     */
    public $itemDetails;

    /**
     * @var int
     */
    public $itemGroupId;

    /**
     * @var string
     */
    public $itemGroupName;
    protected $_name = [
        'description'   => 'Description',
        'itemDetails'   => 'ItemDetails',
        'itemGroupId'   => 'ItemGroupId',
        'itemGroupName' => 'ItemGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->itemDetails) {
            $res['ItemDetails'] = [];
            if (null !== $this->itemDetails && \is_array($this->itemDetails)) {
                $n = 0;
                foreach ($this->itemDetails as $item) {
                    $res['ItemDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemGroupId) {
            $res['ItemGroupId'] = $this->itemGroupId;
        }
        if (null !== $this->itemGroupName) {
            $res['ItemGroupName'] = $this->itemGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionItemGroupDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ItemDetails'])) {
            if (!empty($map['ItemDetails'])) {
                $model->itemDetails = [];
                $n                  = 0;
                foreach ($map['ItemDetails'] as $item) {
                    $model->itemDetails[$n++] = null !== $item ? itemDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemGroupId'])) {
            $model->itemGroupId = $map['ItemGroupId'];
        }
        if (isset($map['ItemGroupName'])) {
            $model->itemGroupName = $map['ItemGroupName'];
        }

        return $model;
    }
}
