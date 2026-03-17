<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointNetworkQualitiesResponseBody;

use AlibabaCloud\Dara\Model;

class accessPointNetworkQualities extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $loss;

    /**
     * @var string
     */
    public $rtt;
    protected $_name = [
        'id' => 'Id',
        'loss' => 'Loss',
        'rtt' => 'Rtt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->loss) {
            $res['Loss'] = $this->loss;
        }

        if (null !== $this->rtt) {
            $res['Rtt'] = $this->rtt;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Loss'])) {
            $model->loss = $map['Loss'];
        }

        if (isset($map['Rtt'])) {
            $model->rtt = $map['Rtt'];
        }

        return $model;
    }
}
