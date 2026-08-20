<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryScenicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryScenicResponseBody\data\scenic;

class data extends Model
{
    /**
     * @var scenic
     */
    public $scenic;
    protected $_name = [
        'scenic' => 'Scenic',
    ];

    public function validate()
    {
        if (null !== $this->scenic) {
            $this->scenic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenic) {
            $res['Scenic'] = null !== $this->scenic ? $this->scenic->toArray($noStream) : $this->scenic;
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
        if (isset($map['Scenic'])) {
            $model->scenic = scenic::fromMap($map['Scenic']);
        }

        return $model;
    }
}
