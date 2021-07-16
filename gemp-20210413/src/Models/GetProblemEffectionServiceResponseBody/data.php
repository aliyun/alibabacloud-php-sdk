<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemEffectionServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 影响服务id
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @description 服务名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 服务id
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description 影响等级
     *
     * @var int
     */
    public $level;

    /**
     * @description 影响状态 0 未恢复 1已恢复
     *
     * @var int
     */
    public $status;

    /**
     * @description 影响描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 图片链接
     *
     * @var string[]
     */
    public $picUrl;
    protected $_name = [
        'effectionServiceId' => 'effectionServiceId',
        'serviceName'        => 'serviceName',
        'serviceId'          => 'serviceId',
        'level'              => 'level',
        'status'             => 'status',
        'description'        => 'description',
        'picUrl'             => 'picUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectionServiceId) {
            $res['effectionServiceId'] = $this->effectionServiceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
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
        if (isset($map['effectionServiceId'])) {
            $model->effectionServiceId = $map['effectionServiceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['picUrl'])) {
            if (!empty($map['picUrl'])) {
                $model->picUrl = $map['picUrl'];
            }
        }

        return $model;
    }
}
