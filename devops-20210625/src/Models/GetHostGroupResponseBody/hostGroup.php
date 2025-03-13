<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody\hostGroup\hostInfos;
use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @example cn-bejing
     *
     * @var string
     */
    public $aliyunRegion;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 111111
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ecs
     *
     * @var string
     */
    public $ecsLabelKey;

    /**
     * @example ecs
     *
     * @var string
     */
    public $ecsLabelValue;

    /**
     * @example ECS_ALIYUN
     *
     * @var string
     */
    public $ecsType;

    /**
     * @var hostInfos[]
     */
    public $hostInfos;

    /**
     * @example 1
     *
     * @var int
     */
    public $hostNum;

    /**
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @example 11111
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1234
     *
     * @var int
     */
    public $serviceConnectionId;

    /**
     * @example ECS
     *
     * @var string
     */
    public $type;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $upateTIme;
    protected $_name = [
        'aliyunRegion'        => 'aliyunRegion',
        'createTime'          => 'createTime',
        'creatorAccountId'    => 'creatorAccountId',
        'description'         => 'description',
        'ecsLabelKey'         => 'ecsLabelKey',
        'ecsLabelValue'       => 'ecsLabelValue',
        'ecsType'             => 'ecsType',
        'hostInfos'           => 'hostInfos',
        'hostNum'             => 'hostNum',
        'id'                  => 'id',
        'modifierAccountId'   => 'modifierAccountId',
        'name'                => 'name',
        'serviceConnectionId' => 'serviceConnectionId',
        'type'                => 'type',
        'upateTIme'           => 'upateTIme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunRegion) {
            $res['aliyunRegion'] = $this->aliyunRegion;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->ecsLabelKey) {
            $res['ecsLabelKey'] = $this->ecsLabelKey;
        }
        if (null !== $this->ecsLabelValue) {
            $res['ecsLabelValue'] = $this->ecsLabelValue;
        }
        if (null !== $this->ecsType) {
            $res['ecsType'] = $this->ecsType;
        }
        if (null !== $this->hostInfos) {
            $res['hostInfos'] = [];
            if (null !== $this->hostInfos && \is_array($this->hostInfos)) {
                $n = 0;
                foreach ($this->hostInfos as $item) {
                    $res['hostInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostNum) {
            $res['hostNum'] = $this->hostNum;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->upateTIme) {
            $res['upateTIme'] = $this->upateTIme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunRegion'])) {
            $model->aliyunRegion = $map['aliyunRegion'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['ecsLabelKey'])) {
            $model->ecsLabelKey = $map['ecsLabelKey'];
        }
        if (isset($map['ecsLabelValue'])) {
            $model->ecsLabelValue = $map['ecsLabelValue'];
        }
        if (isset($map['ecsType'])) {
            $model->ecsType = $map['ecsType'];
        }
        if (isset($map['hostInfos'])) {
            if (!empty($map['hostInfos'])) {
                $model->hostInfos = [];
                $n                = 0;
                foreach ($map['hostInfos'] as $item) {
                    $model->hostInfos[$n++] = null !== $item ? hostInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hostNum'])) {
            $model->hostNum = $map['hostNum'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['upateTIme'])) {
            $model->upateTIme = $map['upateTIme'];
        }

        return $model;
    }
}
