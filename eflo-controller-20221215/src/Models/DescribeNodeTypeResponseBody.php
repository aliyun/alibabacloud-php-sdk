<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeTypeResponseBody\networkCards;

class DescribeNodeTypeResponseBody extends Model
{
    /**
     * @var int
     */
    public $diskQuantity;

    /**
     * @var int
     */
    public $eniHighDenseQuantity;

    /**
     * @var int
     */
    public $eniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @var int
     */
    public $eniQuantity;

    /**
     * @var int
     */
    public $eriQuantity;

    /**
     * @var int
     */
    public $networkCardQuantity;

    /**
     * @var networkCards[]
     */
    public $networkCards;

    /**
     * @var int
     */
    public $primaryEniQueueNumber;

    /**
     * @var int
     */
    public $queuePairNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $secondaryEniQueueNumber;

    /**
     * @var int
     */
    public $totalEniQueueQuantity;
    protected $_name = [
        'diskQuantity' => 'DiskQuantity',
        'eniHighDenseQuantity' => 'EniHighDenseQuantity',
        'eniIpv6AddressQuantity' => 'EniIpv6AddressQuantity',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'eniQuantity' => 'EniQuantity',
        'eriQuantity' => 'EriQuantity',
        'networkCardQuantity' => 'NetworkCardQuantity',
        'networkCards' => 'NetworkCards',
        'primaryEniQueueNumber' => 'PrimaryEniQueueNumber',
        'queuePairNumber' => 'QueuePairNumber',
        'requestId' => 'RequestId',
        'secondaryEniQueueNumber' => 'SecondaryEniQueueNumber',
        'totalEniQueueQuantity' => 'TotalEniQueueQuantity',
    ];

    public function validate()
    {
        if (\is_array($this->networkCards)) {
            Model::validateArray($this->networkCards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskQuantity) {
            $res['DiskQuantity'] = $this->diskQuantity;
        }

        if (null !== $this->eniHighDenseQuantity) {
            $res['EniHighDenseQuantity'] = $this->eniHighDenseQuantity;
        }

        if (null !== $this->eniIpv6AddressQuantity) {
            $res['EniIpv6AddressQuantity'] = $this->eniIpv6AddressQuantity;
        }

        if (null !== $this->eniPrivateIpAddressQuantity) {
            $res['EniPrivateIpAddressQuantity'] = $this->eniPrivateIpAddressQuantity;
        }

        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
        }

        if (null !== $this->eriQuantity) {
            $res['EriQuantity'] = $this->eriQuantity;
        }

        if (null !== $this->networkCardQuantity) {
            $res['NetworkCardQuantity'] = $this->networkCardQuantity;
        }

        if (null !== $this->networkCards) {
            if (\is_array($this->networkCards)) {
                $res['NetworkCards'] = [];
                $n1 = 0;
                foreach ($this->networkCards as $item1) {
                    $res['NetworkCards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->primaryEniQueueNumber) {
            $res['PrimaryEniQueueNumber'] = $this->primaryEniQueueNumber;
        }

        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secondaryEniQueueNumber) {
            $res['SecondaryEniQueueNumber'] = $this->secondaryEniQueueNumber;
        }

        if (null !== $this->totalEniQueueQuantity) {
            $res['TotalEniQueueQuantity'] = $this->totalEniQueueQuantity;
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
        if (isset($map['DiskQuantity'])) {
            $model->diskQuantity = $map['DiskQuantity'];
        }

        if (isset($map['EniHighDenseQuantity'])) {
            $model->eniHighDenseQuantity = $map['EniHighDenseQuantity'];
        }

        if (isset($map['EniIpv6AddressQuantity'])) {
            $model->eniIpv6AddressQuantity = $map['EniIpv6AddressQuantity'];
        }

        if (isset($map['EniPrivateIpAddressQuantity'])) {
            $model->eniPrivateIpAddressQuantity = $map['EniPrivateIpAddressQuantity'];
        }

        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }

        if (isset($map['EriQuantity'])) {
            $model->eriQuantity = $map['EriQuantity'];
        }

        if (isset($map['NetworkCardQuantity'])) {
            $model->networkCardQuantity = $map['NetworkCardQuantity'];
        }

        if (isset($map['NetworkCards'])) {
            if (!empty($map['NetworkCards'])) {
                $model->networkCards = [];
                $n1 = 0;
                foreach ($map['NetworkCards'] as $item1) {
                    $model->networkCards[$n1] = networkCards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrimaryEniQueueNumber'])) {
            $model->primaryEniQueueNumber = $map['PrimaryEniQueueNumber'];
        }

        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecondaryEniQueueNumber'])) {
            $model->secondaryEniQueueNumber = $map['SecondaryEniQueueNumber'];
        }

        if (isset($map['TotalEniQueueQuantity'])) {
            $model->totalEniQueueQuantity = $map['TotalEniQueueQuantity'];
        }

        return $model;
    }
}
