<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskOrderRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $createUserId;

    /**
     * @var bool
     */
    public $isUrgent;

    /**
     * @description This parameter is required.
     *
     * @example cid+lUpHxTIXt7DYqJDcpVxlA==
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 任务单标题：必填
     *
     * @var string
     */
    public $overview;

    /**
     * @description This parameter is required.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 重要性描述
     *
     * @var string
     */
    public $urgentDescription;
    protected $_name = [
        'createUserId'      => 'CreateUserId',
        'isUrgent'          => 'IsUrgent',
        'openGroupId'       => 'OpenGroupId',
        'overview'          => 'Overview',
        'productCode'       => 'ProductCode',
        'urgentDescription' => 'UrgentDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->isUrgent) {
            $res['IsUrgent'] = $this->isUrgent;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->overview) {
            $res['Overview'] = $this->overview;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->urgentDescription) {
            $res['UrgentDescription'] = $this->urgentDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['IsUrgent'])) {
            $model->isUrgent = $map['IsUrgent'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['Overview'])) {
            $model->overview = $map['Overview'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['UrgentDescription'])) {
            $model->urgentDescription = $map['UrgentDescription'];
        }

        return $model;
    }
}
