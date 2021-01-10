<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits;
use AlibabaCloud\Tea\Model;

class hitResult extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var hits
     */
    public $hits;

    /**
     * @var int
     */
    public $reviewResult;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $rid;
    protected $_name = [
        'type'         => 'Type',
        'hits'         => 'Hits',
        'reviewResult' => 'ReviewResult',
        'name'         => 'Name',
        'rid'          => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->hits) {
            $res['Hits'] = null !== $this->hits ? $this->hits->toMap() : null;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Hits'])) {
            $model->hits = hits::fromMap($map['Hits']);
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
