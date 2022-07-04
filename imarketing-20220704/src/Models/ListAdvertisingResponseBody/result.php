<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result\seatbid;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bidid;

    /**
     * @var string
     */
    public $id;

    /**
     * @var seatbid[]
     */
    public $seatbid;
    protected $_name = [
        'bidid'   => 'Bidid',
        'id'      => 'Id',
        'seatbid' => 'Seatbid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bidid) {
            $res['Bidid'] = $this->bidid;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->seatbid) {
            $res['Seatbid'] = [];
            if (null !== $this->seatbid && \is_array($this->seatbid)) {
                $n = 0;
                foreach ($this->seatbid as $item) {
                    $res['Seatbid'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bidid'])) {
            $model->bidid = $map['Bidid'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Seatbid'])) {
            if (!empty($map['Seatbid'])) {
                $model->seatbid = [];
                $n              = 0;
                foreach ($map['Seatbid'] as $item) {
                    $model->seatbid[$n++] = null !== $item ? seatbid::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
