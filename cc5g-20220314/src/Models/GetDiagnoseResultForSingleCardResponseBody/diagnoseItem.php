<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponseBody;

use AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponseBody\diagnoseItem\subItems;
use AlibabaCloud\Tea\Model;

class diagnoseItem extends Model
{
    /**
     * @example Terminal
     *
     * @var string
     */
    public $part;

    /**
     * @example Wrong
     *
     * @var string
     */
    public $status;

    /**
     * @var subItems[]
     */
    public $subItems;
    protected $_name = [
        'part'     => 'Part',
        'status'   => 'Status',
        'subItems' => 'SubItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->part) {
            $res['Part'] = $this->part;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subItems) {
            $res['SubItems'] = [];
            if (null !== $this->subItems && \is_array($this->subItems)) {
                $n = 0;
                foreach ($this->subItems as $item) {
                    $res['SubItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Part'])) {
            $model->part = $map['Part'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubItems'])) {
            if (!empty($map['SubItems'])) {
                $model->subItems = [];
                $n               = 0;
                foreach ($map['SubItems'] as $item) {
                    $model->subItems[$n++] = null !== $item ? subItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
