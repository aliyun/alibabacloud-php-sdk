<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeConfiguredDestinationIPResponseBody;

use AlibabaCloud\Dara\Model;

class destinations extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $destinationIP;

    /**
     * @var string
     */
    public $destinationISP;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var int
     */
    public $operationTime;
    protected $_name = [
        'comment' => 'Comment',
        'destinationIP' => 'DestinationIP',
        'destinationISP' => 'DestinationISP',
        'destinationRegion' => 'DestinationRegion',
        'operationTime' => 'OperationTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->destinationIP) {
            $res['DestinationIP'] = $this->destinationIP;
        }

        if (null !== $this->destinationISP) {
            $res['DestinationISP'] = $this->destinationISP;
        }

        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DestinationIP'])) {
            $model->destinationIP = $map['DestinationIP'];
        }

        if (isset($map['DestinationISP'])) {
            $model->destinationISP = $map['DestinationISP'];
        }

        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        return $model;
    }
}
