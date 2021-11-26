<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\hitResult\hits;
use AlibabaCloud\Tea\Model;

class hitResult extends Model
{
    /**
     * @var hits[]
     */
    public $hits;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $reviewResult;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'hits'         => 'Hits',
        'name'         => 'Name',
        'reviewResult' => 'ReviewResult',
        'rid'          => 'Rid',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hits) {
            $res['Hits'] = [];
            if (null !== $this->hits && \is_array($this->hits)) {
                $n = 0;
                foreach ($this->hits as $item) {
                    $res['Hits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hits'])) {
            if (!empty($map['Hits'])) {
                $model->hits = [];
                $n           = 0;
                foreach ($map['Hits'] as $item) {
                    $model->hits[$n++] = null !== $item ? hits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
