<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class VoiceModelResponse extends Model
{
    /**
     * @var string
     */
    public $resourceTypeDesc;

    /**
     * @var string
     */
    public $useScene;

    /**
     * @var string
     */
    public $voiceDesc;

    /**
     * @var string
     */
    public $voiceGender;

    /**
     * @var int
     */
    public $voiceId;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var string
     */
    public $voiceModel;

    /**
     * @var string
     */
    public $voiceName;

    /**
     * @var string
     */
    public $voiceType;

    /**
     * @var string
     */
    public $voiceUrl;
    protected $_name = [
        'resourceTypeDesc' => 'resourceTypeDesc',
        'useScene'         => 'useScene',
        'voiceDesc'        => 'voiceDesc',
        'voiceGender'      => 'voiceGender',
        'voiceId'          => 'voiceId',
        'voiceLanguage'    => 'voiceLanguage',
        'voiceModel'       => 'voiceModel',
        'voiceName'        => 'voiceName',
        'voiceType'        => 'voiceType',
        'voiceUrl'         => 'voiceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTypeDesc) {
            $res['resourceTypeDesc'] = $this->resourceTypeDesc;
        }
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }
        if (null !== $this->voiceDesc) {
            $res['voiceDesc'] = $this->voiceDesc;
        }
        if (null !== $this->voiceGender) {
            $res['voiceGender'] = $this->voiceGender;
        }
        if (null !== $this->voiceId) {
            $res['voiceId'] = $this->voiceId;
        }
        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }
        if (null !== $this->voiceModel) {
            $res['voiceModel'] = $this->voiceModel;
        }
        if (null !== $this->voiceName) {
            $res['voiceName'] = $this->voiceName;
        }
        if (null !== $this->voiceType) {
            $res['voiceType'] = $this->voiceType;
        }
        if (null !== $this->voiceUrl) {
            $res['voiceUrl'] = $this->voiceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VoiceModelResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceTypeDesc'])) {
            $model->resourceTypeDesc = $map['resourceTypeDesc'];
        }
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }
        if (isset($map['voiceDesc'])) {
            $model->voiceDesc = $map['voiceDesc'];
        }
        if (isset($map['voiceGender'])) {
            $model->voiceGender = $map['voiceGender'];
        }
        if (isset($map['voiceId'])) {
            $model->voiceId = $map['voiceId'];
        }
        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }
        if (isset($map['voiceModel'])) {
            $model->voiceModel = $map['voiceModel'];
        }
        if (isset($map['voiceName'])) {
            $model->voiceName = $map['voiceName'];
        }
        if (isset($map['voiceType'])) {
            $model->voiceType = $map['voiceType'];
        }
        if (isset($map['voiceUrl'])) {
            $model->voiceUrl = $map['voiceUrl'];
        }

        return $model;
    }
}
