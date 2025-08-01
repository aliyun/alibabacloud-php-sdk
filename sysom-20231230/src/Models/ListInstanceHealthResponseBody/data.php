<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceHealthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'images' => 'images',
        'instance' => 'instance',
        'namespace' => 'namespace',
        'pod' => 'pod',
        'regionId' => 'region_id',
        'score' => 'score',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->images) {
            $res['images'] = $this->images;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->pod) {
            $res['pod'] = $this->pod;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = $map['images'];
            }
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['pod'])) {
            $model->pod = $map['pod'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
