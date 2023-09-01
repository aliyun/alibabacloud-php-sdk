<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ServiceTemplate extends Model
{
    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example {     "processor": "tensorflow_gpu_1.12" }
     *
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderNumber;

    /**
     * @example 155770209****904
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example pai
     *
     * @var string
     */
    public $provider;

    /**
     * @example 这里是一个描述。
     *
     * @var string
     */
    public $serviceTemplateDescription;

    /**
     * @example https://***.md
     *
     * @var string
     */
    public $serviceTemplateDoc;

    /**
     * @example st-asdkjf**skdhh
     *
     * @var string
     */
    public $serviceTemplateId;

    /**
     * @example foo
     *
     * @var string
     */
    public $serviceTemplateName;

    /**
     * @example 155770209****904
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'gmtCreateTime'              => 'GmtCreateTime',
        'gmtModifiedTime'            => 'GmtModifiedTime',
        'inferenceSpec'              => 'InferenceSpec',
        'labels'                     => 'Labels',
        'orderNumber'                => 'OrderNumber',
        'ownerId'                    => 'OwnerId',
        'provider'                   => 'Provider',
        'serviceTemplateDescription' => 'ServiceTemplateDescription',
        'serviceTemplateDoc'         => 'ServiceTemplateDoc',
        'serviceTemplateId'          => 'ServiceTemplateId',
        'serviceTemplateName'        => 'ServiceTemplateName',
        'userId'                     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->inferenceSpec) {
            $res['InferenceSpec'] = $this->inferenceSpec;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->serviceTemplateDescription) {
            $res['ServiceTemplateDescription'] = $this->serviceTemplateDescription;
        }
        if (null !== $this->serviceTemplateDoc) {
            $res['ServiceTemplateDoc'] = $this->serviceTemplateDoc;
        }
        if (null !== $this->serviceTemplateId) {
            $res['ServiceTemplateId'] = $this->serviceTemplateId;
        }
        if (null !== $this->serviceTemplateName) {
            $res['ServiceTemplateName'] = $this->serviceTemplateName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InferenceSpec'])) {
            $model->inferenceSpec = $map['InferenceSpec'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ServiceTemplateDescription'])) {
            $model->serviceTemplateDescription = $map['ServiceTemplateDescription'];
        }
        if (isset($map['ServiceTemplateDoc'])) {
            $model->serviceTemplateDoc = $map['ServiceTemplateDoc'];
        }
        if (isset($map['ServiceTemplateId'])) {
            $model->serviceTemplateId = $map['ServiceTemplateId'];
        }
        if (isset($map['ServiceTemplateName'])) {
            $model->serviceTemplateName = $map['ServiceTemplateName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
