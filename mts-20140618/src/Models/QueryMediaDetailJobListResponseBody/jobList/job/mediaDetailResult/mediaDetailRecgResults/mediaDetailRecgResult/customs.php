<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\customs\custom;
use AlibabaCloud\Tea\Model;

class customs extends Model
{
    /**
     * @var custom[]
     */
    public $custom;
    protected $_name = [
        'custom' => 'Custom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custom) {
            $res['Custom'] = [];
            if (null !== $this->custom && \is_array($this->custom)) {
                $n = 0;
                foreach ($this->custom as $item) {
                    $res['Custom'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Custom'])) {
            if (!empty($map['Custom'])) {
                $model->custom = [];
                $n             = 0;
                foreach ($map['Custom'] as $item) {
                    $model->custom[$n++] = null !== $item ? custom::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
