<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\network;

use AlibabaCloud\Tea\Model;

class interfaces extends Model
{
    /**
     * @var int
     */
    public $rxErrors;

    /**
     * @var int
     */
    public $txBytes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $txErrors;

    /**
     * @var int
     */
    public $rxBytes;
    protected $_name = [
        'rxErrors' => 'RxErrors',
        'txBytes'  => 'TxBytes',
        'name'     => 'Name',
        'txErrors' => 'TxErrors',
        'rxBytes'  => 'RxBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rxErrors) {
            $res['RxErrors'] = $this->rxErrors;
        }
        if (null !== $this->txBytes) {
            $res['TxBytes'] = $this->txBytes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->txErrors) {
            $res['TxErrors'] = $this->txErrors;
        }
        if (null !== $this->rxBytes) {
            $res['RxBytes'] = $this->rxBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RxErrors'])) {
            $model->rxErrors = $map['RxErrors'];
        }
        if (isset($map['TxBytes'])) {
            $model->txBytes = $map['TxBytes'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TxErrors'])) {
            $model->txErrors = $map['TxErrors'];
        }
        if (isset($map['RxBytes'])) {
            $model->rxBytes = $map['RxBytes'];
        }

        return $model;
    }
}
