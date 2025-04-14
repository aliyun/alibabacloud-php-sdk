<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponseBody\result\detail;

class result extends Model
{
    /**
     * @var detail
     */
    public $detail;

    /**
     * @var int
     */
    public $embeddedCount;

    /**
     * @var int
     */
    public $maxCount;
    protected $_name = [
        'detail' => 'Detail',
        'embeddedCount' => 'EmbeddedCount',
        'maxCount' => 'MaxCount',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->embeddedCount) {
            $res['EmbeddedCount'] = $this->embeddedCount;
        }

        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
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
