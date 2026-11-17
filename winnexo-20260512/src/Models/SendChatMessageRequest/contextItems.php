<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest\contextItems\annotationFiles;

class contextItems extends Model
{
    /**
     * @var string
     */
    public $annotation;

    /**
     * @var annotationFiles[]
     */
    public $annotationFiles;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $senderName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'annotation' => 'annotation',
        'annotationFiles' => 'annotationFiles',
        'content' => 'content',
        'fileId' => 'fileId',
        'fileName' => 'fileName',
        'fileType' => 'fileType',
        'messageId' => 'messageId',
        'senderName' => 'senderName',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->annotationFiles)) {
            Model::validateArray($this->annotationFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotation) {
            $res['annotation'] = $this->annotation;
        }

        if (null !== $this->annotationFiles) {
            if (\is_array($this->annotationFiles)) {
                $res['annotationFiles'] = [];
                $n1 = 0;
                foreach ($this->annotationFiles as $item1) {
                    $res['annotationFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->senderName) {
            $res['senderName'] = $this->senderName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['annotation'])) {
            $model->annotation = $map['annotation'];
        }

        if (isset($map['annotationFiles'])) {
            if (!empty($map['annotationFiles'])) {
                $model->annotationFiles = [];
                $n1 = 0;
                foreach ($map['annotationFiles'] as $item1) {
                    $model->annotationFiles[$n1] = annotationFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['senderName'])) {
            $model->senderName = $map['senderName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
