<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTemplatesRequest extends Model
{
    /**
     * @description Specifies whether to query the tag information. Valid values:
     *
     *   Enabled
     *   Disabled (default)
     *
     * @example Enabled
     *
     * @var string
     */
    public $includeTags;

    /**
     * @description The page number.\
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.\
     * For more information about resource groups, see the "Resource Group" section of [What is Resource Management?](~~94475~~)
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The sharing type of the template.
     *
     * Valid values:
     *
     *   Private (default): The template belongs to the template owner.
     *   Shared: The template is shared with other users.
     *   Official: The template is the shared template of the official version.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The tags. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The template name. This parameter takes effect only when ShareType is set to Private. The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). The name must start with a digit or letter.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'includeTags'     => 'IncludeTags',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType'       => 'ShareType',
        'tag'             => 'Tag',
        'templateName'    => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeTags) {
            $res['IncludeTags'] = $this->includeTags;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeTags'])) {
            $model->includeTags = $map['IncludeTags'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
