<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponseBody\changelogs;
use AlibabaCloud\Tea\Model;

class DescribeModifyParameterLogResponseBody extends Model
{
    /**
     * @description Indicates whether the modification takes effect.
     *
     * @var changelogs[]
     */
    public $changelogs;

    /**
     * @description The request ID.
     *
     * @example 7565770E-7C45-462D-BA4A-8A5396F2CAD1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changelogs' => 'Changelogs',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changelogs) {
            $res['Changelogs'] = [];
            if (null !== $this->changelogs && \is_array($this->changelogs)) {
                $n = 0;
                foreach ($this->changelogs as $item) {
                    $res['Changelogs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeModifyParameterLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Changelogs'])) {
            if (!empty($map['Changelogs'])) {
                $model->changelogs = [];
                $n                 = 0;
                foreach ($map['Changelogs'] as $item) {
                    $model->changelogs[$n++] = null !== $item ? changelogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
