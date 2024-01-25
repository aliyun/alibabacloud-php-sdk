<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetFoundationVersionResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetFoundationVersionResponseBody\data\siteSurveyTool;
use AlibabaCloud\SDK\Adp\V20210720\Models\Platform;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @example {}
     *
     * @var string
     */
    public $labels;

    /**
     * @example ADP 底座
     *
     * @var string
     */
    public $name;

    /**
     * @var Platform[]
     */
    public $platforms;

    /**
     * @var siteSurveyTool
     */
    public $siteSurveyTool;

    /**
     * @var string
     */
    public $specName;

    /**
     * @example Published
     *
     * @var string
     */
    public $status;

    /**
     * @example trident
     *
     * @var string
     */
    public $type;

    /**
     * @example 4686a7d7-04b4-4101-9466-xxx
     *
     * @var string
     */
    public $uid;

    /**
     * @description version
     *
     * @example v1.4.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'description'    => 'description',
        'features'       => 'features',
        'isDefault'      => 'isDefault',
        'labels'         => 'labels',
        'name'           => 'name',
        'platforms'      => 'platforms',
        'siteSurveyTool' => 'siteSurveyTool',
        'specName'       => 'specName',
        'status'         => 'status',
        'type'           => 'type',
        'uid'            => 'uid',
        'version'        => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->features) {
            $res['features'] = $this->features;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->siteSurveyTool) {
            $res['siteSurveyTool'] = null !== $this->siteSurveyTool ? $this->siteSurveyTool->toMap() : null;
        }
        if (null !== $this->specName) {
            $res['specName'] = $this->specName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = $map['features'];
            }
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['siteSurveyTool'])) {
            $model->siteSurveyTool = siteSurveyTool::fromMap($map['siteSurveyTool']);
        }
        if (isset($map['specName'])) {
            $model->specName = $map['specName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
