<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content\erAttachments;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content\erRouteEntrys;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content\erRouteMaps;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The time when the data address was created.
     *
     * @example 1644283112720
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Description
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Network instance information list
     *
     * @var erAttachments[]
     */
    public $erAttachments;

    /**
     * @description Lingjun HUB Instance ID
     *
     * @example er-aueyxxsy
     *
     * @var string
     */
    public $erId;

    /**
     * @description Lingjun HUB Instance Name
     *
     * @example er-heyuan-main
     *
     * @var string
     */
    public $erName;

    /**
     * @description The list of route entry information.
     *
     * @var erRouteEntrys[]
     */
    public $erRouteEntrys;

    /**
     * @description routing policy information list
     *
     * @var erRouteMaps[]
     */
    public $erRouteMaps;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1627545952000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Primary Zone
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aekzlki4ehfse4y
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'erAttachments'   => 'ErAttachments',
        'erId'            => 'ErId',
        'erName'          => 'ErName',
        'erRouteEntrys'   => 'ErRouteEntrys',
        'erRouteMaps'     => 'ErRouteMaps',
        'gmtModified'     => 'GmtModified',
        'masterZoneId'    => 'MasterZoneId',
        'message'         => 'Message',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->erAttachments) {
            $res['ErAttachments'] = [];
            if (null !== $this->erAttachments && \is_array($this->erAttachments)) {
                $n = 0;
                foreach ($this->erAttachments as $item) {
                    $res['ErAttachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erName) {
            $res['ErName'] = $this->erName;
        }
        if (null !== $this->erRouteEntrys) {
            $res['ErRouteEntrys'] = [];
            if (null !== $this->erRouteEntrys && \is_array($this->erRouteEntrys)) {
                $n = 0;
                foreach ($this->erRouteEntrys as $item) {
                    $res['ErRouteEntrys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->erRouteMaps) {
            $res['ErRouteMaps'] = [];
            if (null !== $this->erRouteMaps && \is_array($this->erRouteMaps)) {
                $n = 0;
                foreach ($this->erRouteMaps as $item) {
                    $res['ErRouteMaps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErAttachments'])) {
            if (!empty($map['ErAttachments'])) {
                $model->erAttachments = [];
                $n                    = 0;
                foreach ($map['ErAttachments'] as $item) {
                    $model->erAttachments[$n++] = null !== $item ? erAttachments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErName'])) {
            $model->erName = $map['ErName'];
        }
        if (isset($map['ErRouteEntrys'])) {
            if (!empty($map['ErRouteEntrys'])) {
                $model->erRouteEntrys = [];
                $n                    = 0;
                foreach ($map['ErRouteEntrys'] as $item) {
                    $model->erRouteEntrys[$n++] = null !== $item ? erRouteEntrys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErRouteMaps'])) {
            if (!empty($map['ErRouteMaps'])) {
                $model->erRouteMaps = [];
                $n                  = 0;
                foreach ($map['ErRouteMaps'] as $item) {
                    $model->erRouteMaps[$n++] = null !== $item ? erRouteMaps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
