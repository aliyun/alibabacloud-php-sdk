<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListEdgeTranscodeTemplateRequest extends Model
{
    /**
     * @description The ID of the data center.
     *
     * This parameter is required.
     *
     * @example ******3b-4d18-395c-8106-ff21a6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The keyword of the query.
     *
     *   You can specify a template ID for an exact match.
     *   You can also specify a template name for a fuzzy match.
     *
     * @example baseline
     *
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The sorting order of the templates by creation time. Default value: desc. Valid values:
     *
     *   desc: descending order.
     *   asc: ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The type of edge transcoding. Valid values:
     *
     *   **common**: standard transcoding and Narrowband HD™ 1.0 transcoding.
     *   **nbhd-2**: Narrowband HD™ 2.0 transcoding.
     *   **ultra-hd**: ultra-high definition transcoding.
     *
     * >  If you do not specify this parameter, the query result is filtered based on the type of edge transcoding on which you are granted permissions.
     *
     * @example nbhd-2
     *
     * @var string
     */
    public $type;

    /**
     * @description The video encoding format. Valid values:
     *
     *   H.264
     *   H.265
     *
     * >  If you do not specify this parameter, the query result is filtered based on the video encoding format on which you are granted permissions.
     *
     * @example H.264
     *
     * @var string
     */
    public $videoCodec;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'keyword' => 'Keyword',
        'ownerId' => 'OwnerId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sortBy' => 'SortBy',
        'type' => 'Type',
        'videoCodec' => 'VideoCodec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeTranscodeTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }

        return $model;
    }
}
