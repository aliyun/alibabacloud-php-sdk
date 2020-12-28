<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody;

use AlibabaCloud\Tea\Model;

class basicInfo extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'description'  => 'Description',
        'state'        => 'State',
        'experimentId' => 'ExperimentId',
        'namespace'    => 'Namespace',
        'tags'         => 'Tags',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
