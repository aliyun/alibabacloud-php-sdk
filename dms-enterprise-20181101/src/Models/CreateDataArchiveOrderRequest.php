<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param;

class CreateDataArchiveOrderRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var param
     */
    public $param;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var string[]
     */
    public $relatedUserList;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'comment' => 'Comment',
        'param' => 'Param',
        'parentId' => 'ParentId',
        'pluginType' => 'PluginType',
        'relatedUserList' => 'RelatedUserList',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        if (\is_array($this->relatedUserList)) {
            Model::validateArray($this->relatedUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }

        if (null !== $this->relatedUserList) {
            if (\is_array($this->relatedUserList)) {
                $res['RelatedUserList'] = [];
                $n1 = 0;
                foreach ($this->relatedUserList as $item1) {
                    $res['RelatedUserList'][$n1++] = $item1;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = [];
                $n1 = 0;
                foreach ($map['RelatedUserList'] as $item1) {
                    $model->relatedUserList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
