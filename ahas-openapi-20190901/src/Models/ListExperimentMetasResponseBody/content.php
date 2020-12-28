<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListExperimentMetasResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'state'        => 'State',
        'createTime'   => 'CreateTime',
        'experimentId' => 'ExperimentId',
        'tags'         => 'Tags',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
