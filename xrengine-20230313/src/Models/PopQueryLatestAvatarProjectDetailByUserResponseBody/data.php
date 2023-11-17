<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserResponseBody;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserResponseBody\data\buildDetail;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserResponseBody\data\dataset;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizUsage;

    /**
     * @var buildDetail
     */
    public $buildDetail;

    /**
     * @var string
     */
    public $createTime;

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
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'bizUsage'    => 'BizUsage',
        'buildDetail' => 'BuildDetail',
        'createTime'  => 'CreateTime',
        'dataset'     => 'Dataset',
        'ext'         => 'Ext',
        'id'          => 'Id',
        'intro'       => 'Intro',
        'status'      => 'Status',
        'title'       => 'Title',
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
        if (null !== $this->buildDetail) {
            $res['BuildDetail'] = null !== $this->buildDetail ? $this->buildDetail->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BuildDetail'])) {
            $model->buildDetail = buildDetail::fromMap($map['BuildDetail']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
