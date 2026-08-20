<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products;

use AlibabaCloud\Dara\Model;

class session extends Model
{
    /**
     * @var string
     */
    public $sessionEndTime;

    /**
     * @var string
     */
    public $sessionName;

    /**
     * @var string
     */
    public $sessionStartTime;
    protected $_name = [
        'sessionEndTime' => 'SessionEndTime',
        'sessionName' => 'SessionName',
        'sessionStartTime' => 'SessionStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionEndTime) {
            $res['SessionEndTime'] = $this->sessionEndTime;
        }

        if (null !== $this->sessionName) {
            $res['SessionName'] = $this->sessionName;
        }

        if (null !== $this->sessionStartTime) {
            $res['SessionStartTime'] = $this->sessionStartTime;
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
        if (isset($map['SessionEndTime'])) {
            $model->sessionEndTime = $map['SessionEndTime'];
        }

        if (isset($map['SessionName'])) {
            $model->sessionName = $map['SessionName'];
        }

        if (isset($map['SessionStartTime'])) {
            $model->sessionStartTime = $map['SessionStartTime'];
        }

        return $model;
    }
}
