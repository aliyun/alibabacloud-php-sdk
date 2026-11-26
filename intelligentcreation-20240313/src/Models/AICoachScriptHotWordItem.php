<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class AICoachScriptHotWordItem extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $hotWord;

    /**
     * @var string
     */
    public $hotWordId;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $scriptRecordId;
    protected $_name = [
        'creatorId' => 'creatorId',
        'creatorName' => 'creatorName',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'hotWord' => 'hotWord',
        'hotWordId' => 'hotWordId',
        'modifierId' => 'modifierId',
        'modifierName' => 'modifierName',
        'scriptRecordId' => 'scriptRecordId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hotWord) {
            $res['hotWord'] = $this->hotWord;
        }

        if (null !== $this->hotWordId) {
            $res['hotWordId'] = $this->hotWordId;
        }

        if (null !== $this->modifierId) {
            $res['modifierId'] = $this->modifierId;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
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
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['hotWord'])) {
            $model->hotWord = $map['hotWord'];
        }

        if (isset($map['hotWordId'])) {
            $model->hotWordId = $map['hotWordId'];
        }

        if (isset($map['modifierId'])) {
            $model->modifierId = $map['modifierId'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        return $model;
    }
}
