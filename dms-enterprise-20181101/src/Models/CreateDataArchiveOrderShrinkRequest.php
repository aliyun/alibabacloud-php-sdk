<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateDataArchiveOrderShrinkRequest extends Model
{
    /**
     * @description The description of the task.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The parameters for archiving data.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $paramShrink;

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
     * @var string
     */
    public $relatedUserListShrink;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'comment' => 'Comment',
        'paramShrink' => 'Param',
        'parentId' => 'ParentId',
        'pluginType' => 'PluginType',
        'relatedUserListShrink' => 'RelatedUserList',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->paramShrink) {
            $res['Param'] = $this->paramShrink;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->relatedUserListShrink) {
            $res['RelatedUserList'] = $this->relatedUserListShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataArchiveOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Param'])) {
            $model->paramShrink = $map['Param'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserListShrink = $map['RelatedUserList'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
