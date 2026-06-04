<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetAppWorkspaceDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int
     */
    public $deep;

    /**
     * @var string
     */
    public $filePath;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'deep' => 'Deep',
        'filePath' => 'FilePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->deep) {
            $res['Deep'] = $this->deep;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
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
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['Deep'])) {
            $model->deep = $map['Deep'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        return $model;
    }
}
