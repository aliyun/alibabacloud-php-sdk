<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest\pluginParam;

class CreateDatabaseExportOrderRequest extends Model
{
    /**
     * @var string
     */
    public $attachmentKey;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var pluginParam
     */
    public $pluginParam;

    /**
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey' => 'AttachmentKey',
        'comment' => 'Comment',
        'parentId' => 'ParentId',
        'pluginParam' => 'PluginParam',
        'relatedUserList' => 'RelatedUserList',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (null !== $this->pluginParam) {
            $this->pluginParam->validate();
        }
        if (\is_array($this->relatedUserList)) {
            Model::validateArray($this->relatedUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->pluginParam) {
            $res['PluginParam'] = null !== $this->pluginParam ? $this->pluginParam->toArray($noStream) : $this->pluginParam;
        }

        if (null !== $this->relatedUserList) {
            if (\is_array($this->relatedUserList)) {
                $res['RelatedUserList'] = [];
                $n1 = 0;
                foreach ($this->relatedUserList as $item1) {
                    $res['RelatedUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['PluginParam'])) {
            $model->pluginParam = pluginParam::fromMap($map['PluginParam']);
        }

        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = [];
                $n1 = 0;
                foreach ($map['RelatedUserList'] as $item1) {
                    $model->relatedUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
