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
     * @example offlineSynthesis
     *
     * @var string
     */
    public $useScene;

    /**
     * @example PRIVATE_VOICE
     *
     * @var string
     */
    public $voiceType;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'useScene'   => 'useScene',
        'voiceType'  => 'voiceType',
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
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
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
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }
        if (isset($map['voiceType'])) {
            $model->voiceType = $map['voiceType'];
        }

        return $model;
    }
}
