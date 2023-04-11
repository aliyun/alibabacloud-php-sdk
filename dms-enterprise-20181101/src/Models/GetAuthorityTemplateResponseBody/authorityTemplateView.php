<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateResponseBody\authorityTemplateView\authorityTemplateItemList;
use AlibabaCloud\Tea\Model;

class authorityTemplateView extends Model
{
    /**
     * @description The resource information in the permission template.
     *
     * @var authorityTemplateItemList
     */
    public $authorityTemplateItemList;

    /**
     * @description The time when the permission template was created. The time is in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2023-01-01 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the user who created the permission template.
     *
     * @example 12***
     *
     * @var int
     */
    public $creatorId;

    /**
     * @description The description of the permission template.
     *
     * @example This template is used for business testing.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the permission template.
     *
     * @example TestTemplate
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the permission template.
     *
     * @example 1563
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'authorityTemplateItemList' => 'AuthorityTemplateItemList',
        'createTime'                => 'CreateTime',
        'creatorId'                 => 'CreatorId',
        'description'               => 'Description',
        'name'                      => 'Name',
        'templateId'                => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityTemplateItemList) {
            $res['AuthorityTemplateItemList'] = null !== $this->authorityTemplateItemList ? $this->authorityTemplateItemList->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorityTemplateView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityTemplateItemList'])) {
            $model->authorityTemplateItemList = authorityTemplateItemList::fromMap($map['AuthorityTemplateItemList']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
