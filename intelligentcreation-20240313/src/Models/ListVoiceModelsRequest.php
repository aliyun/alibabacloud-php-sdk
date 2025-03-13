<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class ListVoiceModelsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resSpecType;

    /**
     * @example offlineSynthesis
     *
     * @var string
     */
    public $useScene;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @example PRIVATE_VOICE
     *
     * @var string
     */
    public $voiceType;
    protected $_name = [
        'pageNumber'    => 'pageNumber',
        'pageSize'      => 'pageSize',
        'resSpecType'   => 'resSpecType',
        'useScene'      => 'useScene',
        'voiceLanguage' => 'voiceLanguage',
        'voiceType'     => 'voiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resSpecType) {
            $res['resSpecType'] = $this->resSpecType;
        }
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }
        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }
        if (null !== $this->voiceType) {
            $res['voiceType'] = $this->voiceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVoiceModelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resSpecType'])) {
            $model->resSpecType = $map['resSpecType'];
        }
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }
        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }
        if (isset($map['voiceType'])) {
            $model->voiceType = $map['voiceType'];
        }

        return $model;
    }
}
