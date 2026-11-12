<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $fileExtension;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $workspacePath;
    protected $_name = [
        'fileExtension' => 'fileExtension',
        'fileId' => 'fileId',
        'sourceName' => 'sourceName',
        'workspacePath' => 'workspacePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileExtension) {
            $res['fileExtension'] = $this->fileExtension;
        }

        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }

        if (null !== $this->sourceName) {
            $res['sourceName'] = $this->sourceName;
        }

        if (null !== $this->workspacePath) {
            $res['workspacePath'] = $this->workspacePath;
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
        if (isset($map['fileExtension'])) {
            $model->fileExtension = $map['fileExtension'];
        }

        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }

        if (isset($map['sourceName'])) {
            $model->sourceName = $map['sourceName'];
        }

        if (isset($map['workspacePath'])) {
            $model->workspacePath = $map['workspacePath'];
        }

        return $model;
    }
}
