<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;

use AlibabaCloud\Tea\Model;

class transcription extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoSplit;

    /**
     * @example 1
     *
     * @var int
     */
    public $clientChannel;

    /**
     * @description This parameter is required.
     *
     * @example sss.mp3
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceChannel;

    /**
     * @var string[]
     */
    public $serviceChannelKeywords;

    /**
     * @description This parameter is required.
     *
     * @example http://1111.com/sss.mp3
     *
     * @var string
     */
    public $voiceFileUrl;
    protected $_name = [
        'autoSplit'              => 'autoSplit',
        'clientChannel'          => 'clientChannel',
        'fileName'               => 'fileName',
        'serviceChannel'         => 'serviceChannel',
        'serviceChannelKeywords' => 'serviceChannelKeywords',
        'voiceFileUrl'           => 'voiceFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }
        if (null !== $this->clientChannel) {
            $res['clientChannel'] = $this->clientChannel;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->serviceChannel) {
            $res['serviceChannel'] = $this->serviceChannel;
        }
        if (null !== $this->serviceChannelKeywords) {
            $res['serviceChannelKeywords'] = $this->serviceChannelKeywords;
        }
        if (null !== $this->voiceFileUrl) {
            $res['voiceFileUrl'] = $this->voiceFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcription
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['clientChannel'])) {
            $model->clientChannel = $map['clientChannel'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['serviceChannel'])) {
            $model->serviceChannel = $map['serviceChannel'];
        }
        if (isset($map['serviceChannelKeywords'])) {
            if (!empty($map['serviceChannelKeywords'])) {
                $model->serviceChannelKeywords = $map['serviceChannelKeywords'];
            }
        }
        if (isset($map['voiceFileUrl'])) {
            $model->voiceFileUrl = $map['voiceFileUrl'];
        }

        return $model;
    }
}
