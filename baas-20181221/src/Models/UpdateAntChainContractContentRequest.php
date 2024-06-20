<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainContractContentRequest extends Model
{
    /**
     * @example update content
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example R6XMn59e
     *
     * @var string
     */
    public $contentId;

    /**
     * @example newFile
     *
     * @var string
     */
    public $contentName;

    /**
     * @example R38DYDop
     *
     * @var string
     */
    public $parentContentId;
    protected $_name = [
        'content'         => 'Content',
        'contentId'       => 'ContentId',
        'contentName'     => 'ContentName',
        'parentContentId' => 'ParentContentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
        }
        if (null !== $this->parentContentId) {
            $res['ParentContentId'] = $this->parentContentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAntChainContractContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
        }
        if (isset($map['ParentContentId'])) {
            $model->parentContentId = $map['ParentContentId'];
        }

        return $model;
    }
}
