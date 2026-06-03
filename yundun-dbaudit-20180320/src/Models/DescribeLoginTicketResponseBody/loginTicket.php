<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketResponseBody\loginTicket\zones;

class loginTicket extends Model
{
    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $ticket;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'certificate' => 'Certificate',
        'ticket' => 'Ticket',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
