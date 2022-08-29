<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateEditingProjectRequest extends Model
{
    /**
     * @var string
     */
    public $businessConfig;

    /**
     * @var string
     */
    public $clipsParam;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $materialMaps;

    /**
     * @var string
     */
    public $projectType;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'businessConfig' => 'BusinessConfig',
        'clipsParam'     => 'ClipsParam',
        'coverURL'       => 'CoverURL',
        'description'    => 'Description',
        'materialMaps'   => 'MaterialMaps',
        'projectType'    => 'ProjectType',
        'templateId'     => 'TemplateId',
        'timeline'       => 'Timeline',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessConfig) {
            $res['BusinessConfig'] = $this->businessConfig;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->materialMaps) {
            $res['MaterialMaps'] = $this->materialMaps;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessConfig'])) {
            $model->businessConfig = $map['BusinessConfig'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaterialMaps'])) {
            $model->materialMaps = $map['MaterialMaps'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
