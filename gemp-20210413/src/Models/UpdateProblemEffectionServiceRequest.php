<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemEffectionServiceRequest extends Model
{
    /**
     * @description 关联服务id
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description 影响等级
     *
     * @var string
     */
    public $level;

    /**
     * @description 影响状态 UN_RECOVERED 未恢复 RECOVERED已恢复
     *
     * @var string
     */
    public $status;

    /**
     * @description 影响描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 图片地址
     *
     * @var string[]
     */
    public $picUrl;

    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 影响服务id
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'serviceId'          => 'serviceId',
        'level'              => 'level',
        'status'             => 'status',
        'description'        => 'description',
        'picUrl'             => 'picUrl',
        'problemId'          => 'problemId',
        'effectionServiceId' => 'effectionServiceId',
        'clientToken'        => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->effectionServiceId) {
            $res['effectionServiceId'] = $this->effectionServiceId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemEffectionServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['effectionServiceId'])) {
            $model->effectionServiceId = $map['effectionServiceId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
