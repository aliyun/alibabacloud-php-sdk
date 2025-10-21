<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListModelInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class modelInstanceInfoList extends Model
{
    /**
     * @var string
     */
    public $easServiceName;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $isSupportContentSafe;

    /**
     * @var bool
     */
    public $isSupportImage;

    /**
     * @var int
     */
    public $isSupportPromptAttack;

    /**
     * @var int
     */
    public $isSupportSensitiveTopic;

    /**
     * @var bool
     */
    public $isSupportText;

    /**
     * @var int
     */
    public $modelInstanceId;

    /**
     * @var int
     */
    public $modelSource;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'easServiceName' => 'EasServiceName',
        'gmtModified' => 'GmtModified',
        'isSupportContentSafe' => 'IsSupportContentSafe',
        'isSupportImage' => 'IsSupportImage',
        'isSupportPromptAttack' => 'IsSupportPromptAttack',
        'isSupportSensitiveTopic' => 'IsSupportSensitiveTopic',
        'isSupportText' => 'IsSupportText',
        'modelInstanceId' => 'ModelInstanceId',
        'modelSource' => 'ModelSource',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->easServiceName) {
            $res['EasServiceName'] = $this->easServiceName;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isSupportContentSafe) {
            $res['IsSupportContentSafe'] = $this->isSupportContentSafe;
        }

        if (null !== $this->isSupportImage) {
            $res['IsSupportImage'] = $this->isSupportImage;
        }

        if (null !== $this->isSupportPromptAttack) {
            $res['IsSupportPromptAttack'] = $this->isSupportPromptAttack;
        }

        if (null !== $this->isSupportSensitiveTopic) {
            $res['IsSupportSensitiveTopic'] = $this->isSupportSensitiveTopic;
        }

        if (null !== $this->isSupportText) {
            $res['IsSupportText'] = $this->isSupportText;
        }

        if (null !== $this->modelInstanceId) {
            $res['ModelInstanceId'] = $this->modelInstanceId;
        }

        if (null !== $this->modelSource) {
            $res['ModelSource'] = $this->modelSource;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['EasServiceName'])) {
            $model->easServiceName = $map['EasServiceName'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IsSupportContentSafe'])) {
            $model->isSupportContentSafe = $map['IsSupportContentSafe'];
        }

        if (isset($map['IsSupportImage'])) {
            $model->isSupportImage = $map['IsSupportImage'];
        }

        if (isset($map['IsSupportPromptAttack'])) {
            $model->isSupportPromptAttack = $map['IsSupportPromptAttack'];
        }

        if (isset($map['IsSupportSensitiveTopic'])) {
            $model->isSupportSensitiveTopic = $map['IsSupportSensitiveTopic'];
        }

        if (isset($map['IsSupportText'])) {
            $model->isSupportText = $map['IsSupportText'];
        }

        if (isset($map['ModelInstanceId'])) {
            $model->modelInstanceId = $map['ModelInstanceId'];
        }

        if (isset($map['ModelSource'])) {
            $model->modelSource = $map['ModelSource'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
