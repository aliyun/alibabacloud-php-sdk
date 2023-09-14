<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwareForUserDeviceResponseBody\software;
use AlibabaCloud\Tea\Model;

class ListSoftwareForUserDeviceResponseBody extends Model
{
    /**
     * @example 102350E7-1A20-58F5-9D63-ABEA820AE6E1
     *
     * @var string
     */
    public $requestId;

    /**
     * @var software[]
     */
    public $software;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'requestId' => 'RequestId',
        'software'  => 'Software',
        'totalNum'  => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->software) {
            $res['Software'] = [];
            if (null !== $this->software && \is_array($this->software)) {
                $n = 0;
                foreach ($this->software as $item) {
                    $res['Software'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSoftwareForUserDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Software'])) {
            if (!empty($map['Software'])) {
                $model->software = [];
                $n               = 0;
                foreach ($map['Software'] as $item) {
                    $model->software[$n++] = null !== $item ? software::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
