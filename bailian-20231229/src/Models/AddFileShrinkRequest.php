<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class AddFileShrinkRequest extends Model
{
    /**
     * @description The primary key ID of the category to which the document is uploaded. This parameter corresponds to the `CategoryId` returned by the [AddCategory](https://www.alibabacloud.com/help/eh/model-studio/developer-reference/api-bailian-2023-12-29-addcategory) operation. You can also click the ID icon next to the category name on the Unstructured Data tab of the [Application Data](https://modelstudio.console.alibabacloud.com/#/data-center) page to view the ID. You can set the parameter to default, which specifies the Default Category created by the system.
     *
     * This parameter is required.
     *
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3510024405
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description The type of the category. Valid values:
     * - UNSTRUCTURED
     * - SESSION_FILE
     *
     * @example UNSTRUCTURED
     *
     * @var string
     */
    public $categoryType;

    /**
     * @description The lease ID, which corresponds to the `FileUploadLeaseId` parameter returned by the [ApplyFileUploadLease](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-applyfileuploadlease) operation.
     *
     * This parameter is required.
     *
     * @example 68abd1dea7b6404d8f7d7b9f7fbd332d.1716698936847
     *
     * @var string
     */
    public $leaseId;

    /**
     * @example https://thisistest.com/abc.pdf
     *
     * @var string
     */
    public $originalFileUrl;

    /**
     * @description The parser. Valid value:
     *
     *   DASHSCOPE_DOCMIND: Intelligent document parsing by Alibaba Cloud.
     *
     * This parameter is required.
     *
     * @example DASHSCOPE_DOCMIND
     *
     * @var string
     */
    public $parser;

    /**
     * @description A list of tags associated with the document. The default value is null, which means no tags. You can specify up to 10 tags.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'leaseId' => 'LeaseId',
        'originalFileUrl' => 'OriginalFileUrl',
        'parser' => 'Parser',
        'tagsShrink' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->leaseId) {
            $res['LeaseId'] = $this->leaseId;
        }
        if (null !== $this->originalFileUrl) {
            $res['OriginalFileUrl'] = $this->originalFileUrl;
        }
        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFileShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['LeaseId'])) {
            $model->leaseId = $map['LeaseId'];
        }
        if (isset($map['OriginalFileUrl'])) {
            $model->originalFileUrl = $map['OriginalFileUrl'];
        }
        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
