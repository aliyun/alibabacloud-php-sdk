<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class ChannelProperties extends Model
{
    /**
     * @var string
     */
    public $channelActivity;

    /**
     * @var string
     */
    public $channelFcm;

    /**
     * @var string
     */
    public $harmonyChannelCategory;

    /**
     * @var string
     */
    public $huaweiChannelCategory;

    /**
     * @var string
     */
    public $huaweiChannelImportance;

    /**
     * @var string
     */
    public $huaweiMessageUrgency;

    /**
     * @var string
     */
    public $mainActivity;

    /**
     * @var string
     */
    public $oppoCategory;

    /**
     * @var string
     */
    public $oppoChannelId;

    /**
     * @var string
     */
    public $oppoNotifyLevel;

    /**
     * @var string
     */
    public $useHuaweiMessage;

    /**
     * @var string
     */
    public $useHuaweiPlainMessage;

    /**
     * @var string
     */
    public $vivoAddBadge;

    /**
     * @var string
     */
    public $vivoCategory;

    /**
     * @var string
     */
    public $vivoPushMode;

    /**
     * @var string
     */
    public $vivoTemplateId;

    /**
     * @var mixed[]
     */
    public $vivoTemplateParams;

    /**
     * @var string
     */
    public $xiaomiChannelId;
    protected $_name = [
        'channelActivity' => 'channelActivity',
        'channelFcm' => 'channelFcm',
        'harmonyChannelCategory' => 'harmonyChannelCategory',
        'huaweiChannelCategory' => 'huaweiChannelCategory',
        'huaweiChannelImportance' => 'huaweiChannelImportance',
        'huaweiMessageUrgency' => 'huaweiMessageUrgency',
        'mainActivity' => 'mainActivity',
        'oppoCategory' => 'oppoCategory',
        'oppoChannelId' => 'oppoChannelId',
        'oppoNotifyLevel' => 'oppoNotifyLevel',
        'useHuaweiMessage' => 'useHuaweiMessage',
        'useHuaweiPlainMessage' => 'useHuaweiPlainMessage',
        'vivoAddBadge' => 'vivoAddBadge',
        'vivoCategory' => 'vivoCategory',
        'vivoPushMode' => 'vivoPushMode',
        'vivoTemplateId' => 'vivoTemplateId',
        'vivoTemplateParams' => 'vivoTemplateParams',
        'xiaomiChannelId' => 'xiaomiChannelId',
    ];

    public function validate()
    {
        if (\is_array($this->vivoTemplateParams)) {
            Model::validateArray($this->vivoTemplateParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelActivity) {
            $res['channelActivity'] = $this->channelActivity;
        }

        if (null !== $this->channelFcm) {
            $res['channelFcm'] = $this->channelFcm;
        }

        if (null !== $this->harmonyChannelCategory) {
            $res['harmonyChannelCategory'] = $this->harmonyChannelCategory;
        }

        if (null !== $this->huaweiChannelCategory) {
            $res['huaweiChannelCategory'] = $this->huaweiChannelCategory;
        }

        if (null !== $this->huaweiChannelImportance) {
            $res['huaweiChannelImportance'] = $this->huaweiChannelImportance;
        }

        if (null !== $this->huaweiMessageUrgency) {
            $res['huaweiMessageUrgency'] = $this->huaweiMessageUrgency;
        }

        if (null !== $this->mainActivity) {
            $res['mainActivity'] = $this->mainActivity;
        }

        if (null !== $this->oppoCategory) {
            $res['oppoCategory'] = $this->oppoCategory;
        }

        if (null !== $this->oppoChannelId) {
            $res['oppoChannelId'] = $this->oppoChannelId;
        }

        if (null !== $this->oppoNotifyLevel) {
            $res['oppoNotifyLevel'] = $this->oppoNotifyLevel;
        }

        if (null !== $this->useHuaweiMessage) {
            $res['useHuaweiMessage'] = $this->useHuaweiMessage;
        }

        if (null !== $this->useHuaweiPlainMessage) {
            $res['useHuaweiPlainMessage'] = $this->useHuaweiPlainMessage;
        }

        if (null !== $this->vivoAddBadge) {
            $res['vivoAddBadge'] = $this->vivoAddBadge;
        }

        if (null !== $this->vivoCategory) {
            $res['vivoCategory'] = $this->vivoCategory;
        }

        if (null !== $this->vivoPushMode) {
            $res['vivoPushMode'] = $this->vivoPushMode;
        }

        if (null !== $this->vivoTemplateId) {
            $res['vivoTemplateId'] = $this->vivoTemplateId;
        }

        if (null !== $this->vivoTemplateParams) {
            if (\is_array($this->vivoTemplateParams)) {
                $res['vivoTemplateParams'] = [];
                foreach ($this->vivoTemplateParams as $key1 => $value1) {
                    $res['vivoTemplateParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->xiaomiChannelId) {
            $res['xiaomiChannelId'] = $this->xiaomiChannelId;
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
        if (isset($map['channelActivity'])) {
            $model->channelActivity = $map['channelActivity'];
        }

        if (isset($map['channelFcm'])) {
            $model->channelFcm = $map['channelFcm'];
        }

        if (isset($map['harmonyChannelCategory'])) {
            $model->harmonyChannelCategory = $map['harmonyChannelCategory'];
        }

        if (isset($map['huaweiChannelCategory'])) {
            $model->huaweiChannelCategory = $map['huaweiChannelCategory'];
        }

        if (isset($map['huaweiChannelImportance'])) {
            $model->huaweiChannelImportance = $map['huaweiChannelImportance'];
        }

        if (isset($map['huaweiMessageUrgency'])) {
            $model->huaweiMessageUrgency = $map['huaweiMessageUrgency'];
        }

        if (isset($map['mainActivity'])) {
            $model->mainActivity = $map['mainActivity'];
        }

        if (isset($map['oppoCategory'])) {
            $model->oppoCategory = $map['oppoCategory'];
        }

        if (isset($map['oppoChannelId'])) {
            $model->oppoChannelId = $map['oppoChannelId'];
        }

        if (isset($map['oppoNotifyLevel'])) {
            $model->oppoNotifyLevel = $map['oppoNotifyLevel'];
        }

        if (isset($map['useHuaweiMessage'])) {
            $model->useHuaweiMessage = $map['useHuaweiMessage'];
        }

        if (isset($map['useHuaweiPlainMessage'])) {
            $model->useHuaweiPlainMessage = $map['useHuaweiPlainMessage'];
        }

        if (isset($map['vivoAddBadge'])) {
            $model->vivoAddBadge = $map['vivoAddBadge'];
        }

        if (isset($map['vivoCategory'])) {
            $model->vivoCategory = $map['vivoCategory'];
        }

        if (isset($map['vivoPushMode'])) {
            $model->vivoPushMode = $map['vivoPushMode'];
        }

        if (isset($map['vivoTemplateId'])) {
            $model->vivoTemplateId = $map['vivoTemplateId'];
        }

        if (isset($map['vivoTemplateParams'])) {
            if (!empty($map['vivoTemplateParams'])) {
                $model->vivoTemplateParams = [];
                foreach ($map['vivoTemplateParams'] as $key1 => $value1) {
                    $model->vivoTemplateParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['xiaomiChannelId'])) {
            $model->xiaomiChannelId = $map['xiaomiChannelId'];
        }

        return $model;
    }
}
