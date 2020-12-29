<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainContractContentRequest extends Model
{
    /**
     * @var string
     */
    public $contentId;

    /**
     * @var string
     */
    public $parentContentId;

    /**
     * @var string
     */
    public $contentName;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'contentId'       => 'ContentId',
        'parentContentId' => 'ParentContentId',
        'contentName'     => 'ContentName',
        'content'         => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->parentContentId) {
            $res['ParentContentId'] = $this->parentContentId;
        }
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['ParentContentId'])) {
            $model->parentContentId = $map['ParentContentId'];
        }
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
