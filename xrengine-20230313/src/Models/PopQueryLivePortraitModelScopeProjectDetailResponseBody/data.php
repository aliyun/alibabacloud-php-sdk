<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLivePortraitModelScopeProjectDetailResponseBody;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLivePortraitModelScopeProjectDetailResponseBody\data\dataset;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizUsage;

    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $materialCoverUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUsage'         => 'BizUsage',
        'dataset'          => 'Dataset',
        'ext'              => 'Ext',
        'id'               => 'Id',
        'intro'            => 'Intro',
        'materialCoverUrl' => 'MaterialCoverUrl',
        'status'           => 'Status',
        'title'            => 'Title',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUsage) {
            $res['BizUsage'] = $this->bizUsage;
        }
        if (null !== $this->dataset) {
            $res['Dataset'] = null !== $this->dataset ? $this->dataset->toMap() : null;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->materialCoverUrl) {
            $res['MaterialCoverUrl'] = $this->materialCoverUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizUsage'])) {
            $model->bizUsage = $map['BizUsage'];
        }
        if (isset($map['Dataset'])) {
            $model->dataset = dataset::fromMap($map['Dataset']);
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['MaterialCoverUrl'])) {
            $model->materialCoverUrl = $map['MaterialCoverUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
