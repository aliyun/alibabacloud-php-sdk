<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models;

use AlibabaCloud\SDK\Esserverless\V20220822\Models\CreateDataStreamRequest\template;
use AlibabaCloud\Tea\Model;

class CreateDataStreamRequest extends Model
{
    /**
     * @description 代表资源名称的资源属性字段
     *
     * @var string
     */
    public $dataStreamName;

    /**
     * @description 删除时间
     *
     * @var string
     */
    public $deletePhase;

    /**
     * @var string
     */
    public $dynamic;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 数据流模板
     *
     * @var template
     */
    public $template;

    /**
     * @var string
     */
    public $timeStampKey;

    /**
     * @description 数据流类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataStreamName' => 'dataStreamName',
        'deletePhase'    => 'deletePhase',
        'dynamic'        => 'dynamic',
        'regionId'       => 'regionId',
        'template'       => 'template',
        'timeStampKey'   => 'timeStampKey',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataStreamName) {
            $res['dataStreamName'] = $this->dataStreamName;
        }
        if (null !== $this->deletePhase) {
            $res['deletePhase'] = $this->deletePhase;
        }
        if (null !== $this->dynamic) {
            $res['dynamic'] = $this->dynamic;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->timeStampKey) {
            $res['timeStampKey'] = $this->timeStampKey;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataStreamName'])) {
            $model->dataStreamName = $map['dataStreamName'];
        }
        if (isset($map['deletePhase'])) {
            $model->deletePhase = $map['deletePhase'];
        }
        if (isset($map['dynamic'])) {
            $model->dynamic = $map['dynamic'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }
        if (isset($map['timeStampKey'])) {
            $model->timeStampKey = $map['timeStampKey'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
