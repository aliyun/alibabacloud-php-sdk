<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateEditingProjectRequest extends Model
{
    /**
     * @description The business status of the project. This parameter can be ignored for general editing projects. Valid values:
     *
     *   Reserving
     *   ReservationCanceled
     *
     * @example Reserving
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The material parameter corresponding to the template, in the JSON format. If TemplateId is specified, ClipsParam must also be specified. For more information<props="china">, see [Create and use a regular template](https://help.aliyun.com/document_detail/328557.html) and [Create and use an advanced template](https://help.aliyun.com/document_detail/291418.html).
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example https://****.com/6AB4D0E1E1C7446888****.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the online editing project.
     *
     * @example testtimeline001desciption
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the online editing project.
     *
     * This parameter is required.
     * @example ****4ee4b97e27b525142a6b2****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The template ID. This parameter is used to quickly build a timeline with ease. Note: Only one of ProjectId, Timeline, and TemplateId can be specified. If TemplateId is specified, ClipsParam must also be specified.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @description The title of the online editing project.
     *
     * @example testtimeline
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'businessStatus' => 'BusinessStatus',
        'clipsParam'     => 'ClipsParam',
        'coverURL'       => 'CoverURL',
        'description'    => 'Description',
        'projectId'      => 'ProjectId',
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
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
     * @return UpdateEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
