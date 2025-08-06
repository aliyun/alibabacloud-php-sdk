<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListEntriesResponseBody\entries;

class DescribePortRangeListEntriesResponseBody extends Model
{
    /**
     * @var entries[]
     */
    public $entries;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entries' => 'Entries',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['Entries'] = [];
                $n1 = 0;
                foreach ($this->entries as $item1) {
                    $res['Entries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n1 = 0;
                foreach ($map['Entries'] as $item1) {
                    $model->entries[$n1] = entries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
