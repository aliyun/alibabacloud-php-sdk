<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryCloudRecordVideoPlayInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 6139b4xxx
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description This parameter is required.
     *
     * @example 44444444
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'conferenceId'  => 'ConferenceId',
        'mediaId'       => 'MediaId',
        'regionId'      => 'RegionId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCloudRecordVideoPlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
