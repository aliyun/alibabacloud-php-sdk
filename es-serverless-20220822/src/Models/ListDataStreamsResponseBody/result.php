<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models\ListDataStreamsResponseBody;

use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListDataStreamsResponseBody\result\template;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 关联的应用AppId
     *
     * @var string
     */
    public $appName;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @var string
     */
    public $dataStreamId;

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
     * @description 代表region的资源属性字段
     *
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
        'appName'        => 'appName',
        'createTime'     => 'createTime',
        'dataStreamId'   => 'dataStreamId',
        'dataStreamName' => 'dataStreamName',
        'deletePhase'    => 'deletePhase',
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
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dataStreamId) {
            $res['dataStreamId'] = $this->dataStreamId;
        }
        if (null !== $this->dataStreamName) {
            $res['dataStreamName'] = $this->dataStreamName;
        }
        if (null !== $this->deletePhase) {
            $res['deletePhase'] = $this->deletePhase;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dataStreamId'])) {
            $model->dataStreamId = $map['dataStreamId'];
        }
        if (isset($map['dataStreamName'])) {
            $model->dataStreamName = $map['dataStreamName'];
        }
        if (isset($map['deletePhase'])) {
            $model->deletePhase = $map['deletePhase'];
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
