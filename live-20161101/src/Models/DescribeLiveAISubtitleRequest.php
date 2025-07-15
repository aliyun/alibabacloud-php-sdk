<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveAISubtitleRequest extends Model
{
    /**
     * @description Specifies whether to query the default subtitle template. Valid values:
     *
     *   true
     *
     *   false
     **Note **The default template includes the built-in parameter configurations. You can specify the copyFrom parameter when you call the AddLiveAISubtitle operation to use the default template.
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Valid values: [1,100].
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: [1,100].
     *
     * @example 100
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the subtitle template.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $subtitleId;

    /**
     * @description The name of the subtitle template. The name can contain only digits, letters, and hyphens (-). The name cannot start with a hyphen.
     *
     * @example sub01
     *
     * @var string
     */
    public $subtitleName;
    protected $_name = [
        'isDefault' => 'IsDefault',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'subtitleId' => 'SubtitleId',
        'subtitleName' => 'SubtitleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subtitleId) {
            $res['SubtitleId'] = $this->subtitleId;
        }
        if (null !== $this->subtitleName) {
            $res['SubtitleName'] = $this->subtitleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAISubtitleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubtitleId'])) {
            $model->subtitleId = $map['SubtitleId'];
        }
        if (isset($map['SubtitleName'])) {
            $model->subtitleName = $map['SubtitleName'];
        }

        return $model;
    }
}
