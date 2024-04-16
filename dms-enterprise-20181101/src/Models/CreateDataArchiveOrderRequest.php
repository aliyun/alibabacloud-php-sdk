<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param;
use AlibabaCloud\Tea\Model;

class CreateDataArchiveOrderRequest extends Model
{
    /**
     * @description The description of the task.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The parameters for archiving data.
     *
     * @var param
     */
    public $param;

    /**
     * @description The ID of the parent ticket. A parent ticket is generated only when a child ticket is created.
     *
     * @example 123****
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The type of the plug-in. Default value: DATA_ARCHIVE.
     *
     * @example DATA_ARCHIVE
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description The list of the related users.
     *
     * @var string[]
     */
    public $relatedUserList;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'comment'         => 'Comment',
        'param'           => 'Param',
        'parentId'        => 'ParentId',
        'pluginType'      => 'PluginType',
        'relatedUserList' => 'RelatedUserList',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataArchiveOrderRequest
     */
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
                $model->relatedUserList = $map['RelatedUserList'];
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
