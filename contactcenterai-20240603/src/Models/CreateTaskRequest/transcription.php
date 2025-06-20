<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;

use AlibabaCloud\Dara\Model;

class transcription extends Model
{
    /**
     * @var string
     */
    public $asrModelCode;

    /**
     * @var int
     */
    public $autoSplit;

    /**
     * @var int
     */
    public $clientChannel;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $languageHints;

    /**
     * @var string
     */
    public $level;

    /**
     * @var bool
     */
    public $roleIdentification;

    /**
     * @var int
     */
    public $serviceChannel;

    /**
     * @var string[]
     */
    public $serviceChannelKeywords;

    /**
     * @var string
     */
    public $vocabularyId;

    /**
     * @var string
     */
    public $voiceFileUrl;
    protected $_name = [
        'asrModelCode' => 'asrModelCode',
        'autoSplit' => 'autoSplit',
        'clientChannel' => 'clientChannel',
        'fileName' => 'fileName',
        'languageHints' => 'languageHints',
        'level' => 'level',
        'roleIdentification' => 'roleIdentification',
        'serviceChannel' => 'serviceChannel',
        'serviceChannelKeywords' => 'serviceChannelKeywords',
        'vocabularyId' => 'vocabularyId',
        'voiceFileUrl' => 'voiceFileUrl',
    ];

    public function validate()
    {
        if (\is_array($this->serviceChannelKeywords)) {
            Model::validateArray($this->serviceChannelKeywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrModelCode) {
            $res['asrModelCode'] = $this->asrModelCode;
        }

        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }

        if (null !== $this->clientChannel) {
            $res['clientChannel'] = $this->clientChannel;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->languageHints) {
            $res['languageHints'] = $this->languageHints;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->roleIdentification) {
            $res['roleIdentification'] = $this->roleIdentification;
        }

        if (null !== $this->serviceChannel) {
            $res['serviceChannel'] = $this->serviceChannel;
        }

        if (null !== $this->serviceChannelKeywords) {
            if (\is_array($this->serviceChannelKeywords)) {
                $res['serviceChannelKeywords'] = [];
                $n1 = 0;
                foreach ($this->serviceChannelKeywords as $item1) {
                    $res['serviceChannelKeywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vocabularyId) {
            $res['vocabularyId'] = $this->vocabularyId;
        }

        if (null !== $this->voiceFileUrl) {
            $res['voiceFileUrl'] = $this->voiceFileUrl;
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
        if (isset($map['asrModelCode'])) {
            $model->asrModelCode = $map['asrModelCode'];
        }

        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }

        if (isset($map['clientChannel'])) {
            $model->clientChannel = $map['clientChannel'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['languageHints'])) {
            $model->languageHints = $map['languageHints'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['roleIdentification'])) {
            $model->roleIdentification = $map['roleIdentification'];
        }

        if (isset($map['serviceChannel'])) {
            $model->serviceChannel = $map['serviceChannel'];
        }

        if (isset($map['serviceChannelKeywords'])) {
            if (!empty($map['serviceChannelKeywords'])) {
                $model->serviceChannelKeywords = [];
                $n1 = 0;
                foreach ($map['serviceChannelKeywords'] as $item1) {
                    $model->serviceChannelKeywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['vocabularyId'])) {
            $model->vocabularyId = $map['vocabularyId'];
        }

        if (isset($map['voiceFileUrl'])) {
            $model->voiceFileUrl = $map['voiceFileUrl'];
        }

        return $model;
    }
}
