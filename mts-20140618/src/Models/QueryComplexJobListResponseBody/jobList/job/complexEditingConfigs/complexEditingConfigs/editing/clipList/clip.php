<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\clipList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\clipList\clip\effects;
use AlibabaCloud\Tea\Model;

class clip extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $sourceID;

    /**
     * @var effects
     */
    public $effects;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceStrmMap;

    /**
     * @var string
     */
    public $out;

    /**
     * @var string
     */
    public $in;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'          => 'Type',
        'sourceID'      => 'SourceID',
        'effects'       => 'Effects',
        'sourceType'    => 'SourceType',
        'sourceStrmMap' => 'SourceStrmMap',
        'out'           => 'Out',
        'in'            => 'In',
        'id'            => 'Id',
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
        if (null !== $this->sourceID) {
            $res['SourceID'] = $this->sourceID;
        }
        if (null !== $this->effects) {
            $res['Effects'] = null !== $this->effects ? $this->effects->toMap() : null;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceStrmMap) {
            $res['SourceStrmMap'] = $this->sourceStrmMap;
        }
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->in) {
            $res['In'] = $this->in;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SourceID'])) {
            $model->sourceID = $map['SourceID'];
        }
        if (isset($map['Effects'])) {
            $model->effects = effects::fromMap($map['Effects']);
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceStrmMap'])) {
            $model->sourceStrmMap = $map['SourceStrmMap'];
        }
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['In'])) {
            $model->in = $map['In'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
