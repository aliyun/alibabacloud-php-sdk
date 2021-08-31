<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody\hostGroup\hostInfos;
use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var int
     */
    public $upateTIme;

    /**
     * @var int
     */
    public $hostNum;

    /**
     * @var string
     */
    public $modifierAccountId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $ecsType;

    /**
     * @var string
     */
    public $aliyunRegion;

    /**
     * @var string
     */
    public $ecsLabelKey;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $serviceConnectionId;

    /**
     * @var hostInfos[]
     */
    public $hostInfos;

    /**
     * @var string
     */
    public $ecsLabelValue;
    protected $_name = [
        'creatorAccountId'    => 'creatorAccountId',
        'upateTIme'           => 'upateTIme',
        'hostNum'             => 'hostNum',
        'modifierAccountId'   => 'modifierAccountId',
        'description'         => 'description',
        'type'                => 'type',
        'createTime'          => 'createTime',
        'ecsType'             => 'ecsType',
        'aliyunRegion'        => 'aliyunRegion',
        'ecsLabelKey'         => 'ecsLabelKey',
        'id'                  => 'id',
        'name'                => 'name',
        'serviceConnectionId' => 'serviceConnectionId',
        'hostInfos'           => 'hostInfos',
        'ecsLabelValue'       => 'ecsLabelValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->upateTIme) {
            $res['upateTIme'] = $this->upateTIme;
        }
        if (null !== $this->hostNum) {
            $res['hostNum'] = $this->hostNum;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->ecsType) {
            $res['ecsType'] = $this->ecsType;
        }
        if (null !== $this->aliyunRegion) {
            $res['aliyunRegion'] = $this->aliyunRegion;
        }
        if (null !== $this->ecsLabelKey) {
            $res['ecsLabelKey'] = $this->ecsLabelKey;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
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
        if (null !== $this->ecsLabelValue) {
            $res['ecsLabelValue'] = $this->ecsLabelValue;
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
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['upateTIme'])) {
            $model->upateTIme = $map['upateTIme'];
        }
        if (isset($map['hostNum'])) {
            $model->hostNum = $map['hostNum'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['ecsType'])) {
            $model->ecsType = $map['ecsType'];
        }
        if (isset($map['aliyunRegion'])) {
            $model->aliyunRegion = $map['aliyunRegion'];
        }
        if (isset($map['ecsLabelKey'])) {
            $model->ecsLabelKey = $map['ecsLabelKey'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
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
        if (isset($map['ecsLabelValue'])) {
            $model->ecsLabelValue = $map['ecsLabelValue'];
        }

        return $model;
    }
}
