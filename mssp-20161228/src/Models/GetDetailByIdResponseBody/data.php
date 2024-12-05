<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponseBody\data\vulDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Vulnerability details.
     *
     * @var vulDetails[]
     */
    public $vulDetails;
    protected $_name = [
        'vulDetails' => 'VulDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vulDetails) {
            $res['VulDetails'] = [];
            if (null !== $this->vulDetails && \is_array($this->vulDetails)) {
                $n = 0;
                foreach ($this->vulDetails as $item) {
                    $res['VulDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VulDetails'])) {
            if (!empty($map['VulDetails'])) {
                $model->vulDetails = [];
                $n                 = 0;
                foreach ($map['VulDetails'] as $item) {
                    $model->vulDetails[$n++] = null !== $item ? vulDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
