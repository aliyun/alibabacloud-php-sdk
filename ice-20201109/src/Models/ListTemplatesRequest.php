<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListTemplatesRequest extends Model
{
    /**
     * @description The source from which the template was created.
     *
     * Valid values:
     *
     *   AliyunConsole
     *   WebSDK
     *   OpenAPI
     *
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @description The search keyword. You can use the template ID or title as the keyword to search for templates.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 20. Valid values: 1 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting parameter. By default, the query results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   CreationTime:Asc: sorted by creation time in ascending order.
     *   CreationTime:Desc: sorted by creation time in descending order.
     *
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortType;

    /**
     * @description The template state.
     *
     * Valid values:
     *
     *   UploadFailed: Failed to upload the video.
     *   ProcessFailed: Failed to process the advanced template.
     *   Available: The template is available.
     *   Uploading: The video is being uploaded.
     *   Created: The template is created but not ready for use.
     *   Processing: The advanced template is being processed.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The template type.
     *
     * Valid values:
     *
     *   Timeline
     *   VETemplate
     *
     * @example Timeline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createSource' => 'CreateSource',
        'keyword'      => 'Keyword',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'sortType'     => 'SortType',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
