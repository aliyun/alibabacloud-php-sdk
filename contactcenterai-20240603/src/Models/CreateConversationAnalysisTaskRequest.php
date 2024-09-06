<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateConversationAnalysisTaskRequest\examples;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateConversationAnalysisTaskRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateConversationAnalysisTaskRequest\serviceInspection;
use AlibabaCloud\Tea\Model;

class CreateConversationAnalysisTaskRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoSplit;

    /**
     * @example 0
     *
     * @var int
     */
    public $clientChannel;

    /**
     * @var examples
     */
    public $examples;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @description This parameter is required.
     *
     * @example audio.mp3
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example tyxmTurbo
     *
     * @var string
     */
    public $modelCode;

    /**
     * @var string[]
     */
    public $resultTypes;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @example 0
     *
     * @var int
     */
    public $serviceChannel;

    /**
     * @var string[]
     */
    public $serviceChannelKeywords;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @var string[]
     */
    public $templateIds;

    /**
     * @description This parameter is required.
     *
     * @example http://a.b.com/inner.mp3
     *
     * @var string
     */
    public $voiceFileUrl;
    protected $_name = [
        'autoSplit'              => 'autoSplit',
        'clientChannel'          => 'clientChannel',
        'examples'               => 'examples',
        'fields'                 => 'fields',
        'fileName'               => 'fileName',
        'modelCode'              => 'modelCode',
        'resultTypes'            => 'resultTypes',
        'sceneName'              => 'sceneName',
        'serviceChannel'         => 'serviceChannel',
        'serviceChannelKeywords' => 'serviceChannelKeywords',
        'serviceInspection'      => 'serviceInspection',
        'templateIds'            => 'templateIds',
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
        if (null !== $this->examples) {
            $res['examples'] = null !== $this->examples ? $this->examples->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }
        if (null !== $this->resultTypes) {
            $res['resultTypes'] = $this->resultTypes;
        }
        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }
        if (null !== $this->serviceChannel) {
            $res['serviceChannel'] = $this->serviceChannel;
        }
        if (null !== $this->serviceChannelKeywords) {
            $res['serviceChannelKeywords'] = $this->serviceChannelKeywords;
        }
        if (null !== $this->serviceInspection) {
            $res['serviceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->templateIds) {
            $res['templateIds'] = $this->templateIds;
        }
        if (null !== $this->voiceFileUrl) {
            $res['voiceFileUrl'] = $this->voiceFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConversationAnalysisTaskRequest
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
        if (isset($map['examples'])) {
            $model->examples = examples::fromMap($map['examples']);
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }
        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = $map['resultTypes'];
            }
        }
        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }
        if (isset($map['serviceChannel'])) {
            $model->serviceChannel = $map['serviceChannel'];
        }
        if (isset($map['serviceChannelKeywords'])) {
            if (!empty($map['serviceChannelKeywords'])) {
                $model->serviceChannelKeywords = $map['serviceChannelKeywords'];
            }
        }
        if (isset($map['serviceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['serviceInspection']);
        }
        if (isset($map['templateIds'])) {
            if (!empty($map['templateIds'])) {
                $model->templateIds = $map['templateIds'];
            }
        }
        if (isset($map['voiceFileUrl'])) {
            $model->voiceFileUrl = $map['voiceFileUrl'];
        }

        return $model;
    }
}
