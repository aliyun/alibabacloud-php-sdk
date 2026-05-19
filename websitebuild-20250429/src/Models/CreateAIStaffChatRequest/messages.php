<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffChatRequest;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'metaData' => 'MetaData',
        'role' => 'Role',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['MetaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['MetaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['MetaData'])) {
            if (!empty($map['MetaData'])) {
                $model->metaData = [];
                foreach ($map['MetaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
