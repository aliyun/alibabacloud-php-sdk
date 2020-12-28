<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class UpdateExperimentBasicInfoRequest extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ahasRegionId;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'experimentId' => 'ExperimentId',
        'nameSpace'    => 'NameSpace',
        'name'         => 'Name',
        'description'  => 'Description',
        'ahasRegionId' => 'AhasRegionId',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateExperimentBasicInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
