<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorTerrorismResult\terrorismTopList;

use AlibabaCloud\Tea\Model;

class top extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'index'     => 'Index',
        'label'     => 'Label',
        'object'    => 'Object',
        'score'     => 'Score',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return top
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
