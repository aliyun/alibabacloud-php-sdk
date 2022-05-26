<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemTimeResponseBody;

use AlibabaCloud\Tea\Model;

class workitemTime extends Model
{
    /**
     * @description 实际工时，小时为单位
     *
     * @var int
     */
    public $actualTime;

    /**
     * @description 工时描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 工时记录的创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 结束时间
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @description 工时记录的修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @description 工时唯一标识
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 登记人的account Id
     *
     * @var string
     */
    public $recordUser;

    /**
     * @description 工时类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 工作项id，唯一标识
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'actualTime'         => 'actualTime',
        'description'        => 'description',
        'gmtCreate'          => 'gmtCreate',
        'gmtEnd'             => 'gmtEnd',
        'gmtModified'        => 'gmtModified',
        'gmtStart'           => 'gmtStart',
        'identifier'         => 'identifier',
        'recordUser'         => 'recordUser',
        'type'               => 'type',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['actualTime'] = $this->actualTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->recordUser) {
            $res['recordUser'] = $this->recordUser;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitemTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualTime'])) {
            $model->actualTime = $map['actualTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['recordUser'])) {
            $model->recordUser = $map['recordUser'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
