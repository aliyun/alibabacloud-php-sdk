<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeStudioLayoutsRequest extends Model
{
    /**
     * @description The ID of the production studio instance.
     *
     *   If you call the [CreateCaster](https://help.aliyun.com/document_detail/69338.html) operation to create a production studio instance, you can obtain the instance ID from the CasterId parameter in the response.
     *   If you create a production studio instance in the ApsaraVideo Live console, perform the following operations to obtain the instance ID: Log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane. Then, view the instance ID on the **Production Studio Management** page.
     *
     * >  The value displayed in the Name column for an instance on the Production Studio Management page is the ID of the instance.
     *
     * This parameter is required.
     *
     * @example 5c6a2a0d-f228-4a64-af62-20e91b96****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The ID of the layout.
     *
     * You can specify multiple layout IDs and separate them with commas (,). If you leave this parameter empty, all layouts of the production studio are returned.
     *
     * If you call the [AddStudioLayout](https://help.aliyun.com/document_detail/215388.html) operation to configure a layout for a virtual studio, you can obtain the ID of the layout from the LayoutId parameter in the response.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'casterId' => 'CasterId',
        'layoutId' => 'LayoutId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStudioLayoutsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
