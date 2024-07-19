<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\ListSpecReviewTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 339
     *
     * @var string
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @example 2024-05-27T10:13:22.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example USER
     *
     * @var string
     */
    public $source;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example QUOTA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'          => 'Id',
        'appName'     => 'appName',
        'applyReason' => 'applyReason',
        'gmtCreate'   => 'gmtCreate',
        'source'      => 'source',
        'status'      => 'status',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->applyReason) {
            $res['applyReason'] = $this->applyReason;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['applyReason'])) {
            $model->applyReason = $map['applyReason'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
