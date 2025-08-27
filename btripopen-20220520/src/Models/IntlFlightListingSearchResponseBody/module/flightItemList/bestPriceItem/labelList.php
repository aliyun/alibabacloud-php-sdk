<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module\flightItemList\bestPriceItem;

use AlibabaCloud\Dara\Model;

class labelList extends Model
{
    /**
     * @var int
     */
    public $labelCode;

    /**
     * @var string
     */
    public $labelName;
    protected $_name = [
        'labelCode' => 'labelCode',
        'labelName' => 'labelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelCode) {
            $res['labelCode'] = $this->labelCode;
        }

        if (null !== $this->labelName) {
            $res['labelName'] = $this->labelName;
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
        if (isset($map['labelCode'])) {
            $model->labelCode = $map['labelCode'];
        }

        if (isset($map['labelName'])) {
            $model->labelName = $map['labelName'];
        }

        return $model;
    }
}
