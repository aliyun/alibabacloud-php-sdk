<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ReleaseClusterByTemplateTagForInternalRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $templateTagSet;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'templateTagSet'  => 'TemplateTagSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateTagSet) {
            $res['TemplateTagSet'] = $this->templateTagSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseClusterByTemplateTagForInternalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateTagSet'])) {
            if (!empty($map['TemplateTagSet'])) {
                $model->templateTagSet = $map['TemplateTagSet'];
            }
        }

        return $model;
    }
}
