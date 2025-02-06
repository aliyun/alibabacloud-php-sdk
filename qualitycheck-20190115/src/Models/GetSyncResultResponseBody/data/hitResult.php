<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data\hitResult\hits;

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
        if (\is_array($this->hits)) {
            Model::validateArray($this->hits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hits) {
            if (\is_array($this->hits)) {
                $res['Hits'] = [];
                $n1          = 0;
                foreach ($this->hits as $item1) {
                    $res['Hits'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hits'])) {
            if (!empty($map['Hits'])) {
                $model->hits = [];
                $n1          = 0;
                foreach ($map['Hits'] as $item1) {
                    $model->hits[$n1++] = hits::fromMap($item1);
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
