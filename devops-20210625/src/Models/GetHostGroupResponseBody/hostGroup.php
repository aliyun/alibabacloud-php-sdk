<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody\hostGroup\hostInfos;

class hostGroup extends Model
{
    /**
     * @var string
     */
    public $aliyunRegion;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $creatorAccountId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $ecsLabelKey;
    /**
     * @var string
     */
    public $ecsLabelValue;
    /**
     * @var string
     */
    public $ecsType;
    /**
     * @var hostInfos[]
     */
    public $hostInfos;
    /**
     * @var int
     */
    public $hostNum;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $modifierAccountId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $serviceConnectionId;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (\is_array($this->hostInfos)) {
            Model::validateArray($this->hostInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->hostInfos)) {
                $res['hostInfos'] = [];
                $n1               = 0;
                foreach ($this->hostInfos as $item1) {
                    $res['hostInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1               = 0;
                foreach ($map['hostInfos'] as $item1) {
                    $model->hostInfos[$n1++] = hostInfos::fromMap($item1);
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
