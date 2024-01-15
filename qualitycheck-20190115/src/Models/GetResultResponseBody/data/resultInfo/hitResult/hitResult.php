<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits;
use AlibabaCloud\Tea\Model;

class hitResult extends Model
{
    /**
     * @var conditions
     */
    public $conditions;

    /**
     * @var hits
     */
    public $hits;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $reviewResult;

    /**
     * @example 1276
     *
     * @var string
     */
    public $rid;

    /**
     * @example 123xx
     *
     * @var int
     */
    public $schemeId;

    /**
     * @example 11xx
     *
     * @var int
     */
    public $schemeVersion;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conditions'    => 'Conditions',
        'hits'          => 'Hits',
        'name'          => 'Name',
        'reviewResult'  => 'ReviewResult',
        'rid'           => 'Rid',
        'schemeId'      => 'SchemeId',
        'schemeVersion' => 'SchemeVersion',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = null !== $this->conditions ? $this->conditions->toMap() : null;
        }
        if (null !== $this->hits) {
            $res['Hits'] = null !== $this->hits ? $this->hits->toMap() : null;
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
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->schemeVersion) {
            $res['SchemeVersion'] = $this->schemeVersion;
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
        if (isset($map['Conditions'])) {
            $model->conditions = conditions::fromMap($map['Conditions']);
        }
        if (isset($map['Hits'])) {
            $model->hits = hits::fromMap($map['Hits']);
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
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['SchemeVersion'])) {
            $model->schemeVersion = $map['SchemeVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
