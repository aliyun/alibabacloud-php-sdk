<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\clipList;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\clipList\clip\effects;
use AlibabaCloud\Tea\Model;

class clip extends Model
{
    /**
     * @var effects
     */
    public $effects;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $in;

    /**
     * @var string
     */
    public $out;

    /**
     * @var string
     */
    public $sourceID;

    /**
     * @var string
     */
    public $sourceStrmMap;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'effects'       => 'Effects',
        'id'            => 'Id',
        'in'            => 'In',
        'out'           => 'Out',
        'sourceID'      => 'SourceID',
        'sourceStrmMap' => 'SourceStrmMap',
        'sourceType'    => 'SourceType',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effects) {
            $res['Effects'] = null !== $this->effects ? $this->effects->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->in) {
            $res['In'] = $this->in;
        }
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->sourceID) {
            $res['SourceID'] = $this->sourceID;
        }
        if (null !== $this->sourceStrmMap) {
            $res['SourceStrmMap'] = $this->sourceStrmMap;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Effects'])) {
            $model->effects = effects::fromMap($map['Effects']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['In'])) {
            $model->in = $map['In'];
        }
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['SourceID'])) {
            $model->sourceID = $map['SourceID'];
        }
        if (isset($map['SourceStrmMap'])) {
            $model->sourceStrmMap = $map['SourceStrmMap'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
