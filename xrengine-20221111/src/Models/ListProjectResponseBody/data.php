<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody\data\dataset;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody\data\source;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody\data\user;

class data extends Model
{
    /**
     * @var string
     */
    public $bizUsage;

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
     * @var mixed[]
     */
    public $extInfo;

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
    public $modifiedTime;

    /**
     * @var source
     */
    public $source;

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

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'bizUsage' => 'BizUsage',
        'createTime' => 'CreateTime',
        'dataset' => 'Dataset',
        'ext' => 'Ext',
        'extInfo' => 'ExtInfo',
        'id' => 'Id',
        'intro' => 'Intro',
        'materialCoverUrl' => 'MaterialCoverUrl',
        'modifiedTime' => 'ModifiedTime',
        'source' => 'Source',
        'status' => 'Status',
        'title' => 'Title',
        'type' => 'Type',
        'user' => 'User',
    ];

    public function validate()
    {
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (null !== $this->user) {
            $this->user->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUsage) {
            $res['BizUsage'] = $this->bizUsage;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataset) {
            $res['Dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }

        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['ExtInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['ExtInfo'][$key1] = $value1;
                }
            }
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

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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

        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toArray($noStream) : $this->user;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUsage'])) {
            $model->bizUsage = $map['BizUsage'];
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

        if (isset($map['ExtInfo'])) {
            if (!empty($map['ExtInfo'])) {
                $model->extInfo = [];
                foreach ($map['ExtInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
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

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
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

        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
