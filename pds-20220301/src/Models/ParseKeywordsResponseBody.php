<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\ParseKeywordsResponseBody\timeRange;
use AlibabaCloud\Tea\Model;

class ParseKeywordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $addressLine;

    /**
     * @var SystemTag[]
     */
    public $tags;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'addressLine' => 'address_line',
        'tags'        => 'tags',
        'timeRange'   => 'time_range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLine) {
            $res['address_line'] = $this->addressLine;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeRange) {
            $res['time_range'] = null !== $this->timeRange ? $this->timeRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ParseKeywordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address_line'])) {
            $model->addressLine = $map['address_line'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? SystemTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['time_range'])) {
            $model->timeRange = timeRange::fromMap($map['time_range']);
        }

        return $model;
    }
}
