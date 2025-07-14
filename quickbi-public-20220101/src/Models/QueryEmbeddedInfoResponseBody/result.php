<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponseBody\result\detail;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Embed the statistics of the work.
     *
     * @var detail
     */
    public $detail;

    /**
     * @description The number of reports that are currently embedded.
     *
     * @example 3
     *
     * @var int
     */
    public $embeddedCount;

    /**
     * @description The maximum number of reports that can be embedded.
     *
     * @example 100
     *
     * @var int
     */
    public $maxCount;
    protected $_name = [
        'detail' => 'Detail',
        'embeddedCount' => 'EmbeddedCount',
        'maxCount' => 'MaxCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->embeddedCount) {
            $res['EmbeddedCount'] = $this->embeddedCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
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
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['EmbeddedCount'])) {
            $model->embeddedCount = $map['EmbeddedCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        return $model;
    }
}
