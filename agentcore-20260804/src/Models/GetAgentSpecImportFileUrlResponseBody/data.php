<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecImportFileUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $maxSize;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'contentType' => 'contentType',
        'maxSize' => 'maxSize',
        'ossObjectName' => 'ossObjectName',
        'uploadUrl' => 'uploadUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }

        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->uploadUrl) {
            $res['uploadUrl'] = $this->uploadUrl;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }

        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }

        if (isset($map['uploadUrl'])) {
            $model->uploadUrl = $map['uploadUrl'];
        }

        return $model;
    }
}
