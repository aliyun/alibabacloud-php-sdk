<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponseBody\remediations;
use AlibabaCloud\Tea\Model;

class ListRemediationsResponseBody extends Model
{
    /**
     * @var remediations[]
     */
    public $remediations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediations' => 'Remediations',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediations) {
            $res['Remediations'] = [];
            if (null !== $this->remediations && \is_array($this->remediations)) {
                $n = 0;
                foreach ($this->remediations as $item) {
                    $res['Remediations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemediationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remediations'])) {
            if (!empty($map['Remediations'])) {
                $model->remediations = [];
                $n                   = 0;
                foreach ($map['Remediations'] as $item) {
                    $model->remediations[$n++] = null !== $item ? remediations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
