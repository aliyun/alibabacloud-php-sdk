<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent\payload\output\response\data\extraInfo;

use AlibabaCloud\Dara\Model;

class inputResources extends Model
{
    /**
     * @var int
     */
    public $contentIndex;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'contentIndex' => 'contentIndex',
        'type' => 'type',
        'resourceId' => 'resourceId',
        'url' => 'url',
        'fileName' => 'fileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentIndex) {
            $res['contentIndex'] = $this->contentIndex;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
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
        if (isset($map['contentIndex'])) {
            $model->contentIndex = $map['contentIndex'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
