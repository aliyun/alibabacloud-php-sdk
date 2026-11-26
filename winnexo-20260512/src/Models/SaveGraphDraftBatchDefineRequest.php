<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SaveGraphDraftBatchDefineRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var int[]
     */
    public $draftChangeIds;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $saveMode;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $yamlEdit;
    protected $_name = [
        'appToken' => 'appToken',
        'draftChangeIds' => 'draftChangeIds',
        'graphName' => 'graphName',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'saveMode' => 'saveMode',
        'tenantId' => 'tenantId',
        'yamlEdit' => 'yamlEdit',
    ];

    public function validate()
    {
        if (\is_array($this->draftChangeIds)) {
            Model::validateArray($this->draftChangeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->draftChangeIds) {
            if (\is_array($this->draftChangeIds)) {
                $res['draftChangeIds'] = [];
                $n1 = 0;
                foreach ($this->draftChangeIds as $item1) {
                    $res['draftChangeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->saveMode) {
            $res['saveMode'] = $this->saveMode;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->yamlEdit) {
            $res['yamlEdit'] = $this->yamlEdit;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['draftChangeIds'])) {
            if (!empty($map['draftChangeIds'])) {
                $model->draftChangeIds = [];
                $n1 = 0;
                foreach ($map['draftChangeIds'] as $item1) {
                    $model->draftChangeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['saveMode'])) {
            $model->saveMode = $map['saveMode'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['yamlEdit'])) {
            $model->yamlEdit = $map['yamlEdit'];
        }

        return $model;
    }
}
