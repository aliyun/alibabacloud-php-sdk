<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody;

use AlibabaCloud\Dara\Model;

class pageInfo extends Model
{
    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'number' => 'number',
        'scrollId' => 'scroll_id',
        'totalNumber' => 'total_number',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }

        if (null !== $this->totalNumber) {
            $res['total_number'] = $this->totalNumber;
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
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }

        if (isset($map['total_number'])) {
            $model->totalNumber = $map['total_number'];
        }

        return $model;
    }
}
