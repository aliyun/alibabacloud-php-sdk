<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryOrderResponseBody\data;

use AlibabaCloud\Dara\Model;

class vouchers extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $totalTimes;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'code' => 'Code',
        'totalTimes' => 'TotalTimes',
        'type' => 'Type',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->totalTimes) {
            $res['TotalTimes'] = $this->totalTimes;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['TotalTimes'])) {
            $model->totalTimes = $map['TotalTimes'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
