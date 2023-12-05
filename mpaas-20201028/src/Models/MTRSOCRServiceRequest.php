<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class MTRSOCRServiceRequest extends Model
{
    /**
     * @example ONEX8C7E7FA161089
     *
     * @var string
     */
    public $appId;

    /**
     * @example xydasf==ac
     *
     * @var string
     */
    public $imageRaw;

    /**
     * @var bool
     */
    public $mask;

    /**
     * @example tabcaa
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example ID_CARD_OCR
     *
     * @var string
     */
    public $type;

    /**
     * @example default
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'       => 'AppId',
        'imageRaw'    => 'ImageRaw',
        'mask'        => 'Mask',
        'tenantId'    => 'TenantId',
        'type'        => 'Type',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->imageRaw) {
            $res['ImageRaw'] = $this->imageRaw;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MTRSOCRServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ImageRaw'])) {
            $model->imageRaw = $map['ImageRaw'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
