<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content\erAttachments;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content\erRouteEntrys;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content\erRouteMaps;

class content extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var erAttachments[]
     */
    public $erAttachments;
    /**
     * @var string
     */
    public $erId;
    /**
     * @var string
     */
    public $erName;
    /**
     * @var erRouteEntrys[]
     */
    public $erRouteEntrys;
    /**
     * @var erRouteMaps[]
     */
    public $erRouteMaps;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $masterZoneId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (\is_array($this->erAttachments)) {
            Model::validateArray($this->erAttachments);
        }
        if (\is_array($this->erRouteEntrys)) {
            Model::validateArray($this->erRouteEntrys);
        }
        if (\is_array($this->erRouteMaps)) {
            Model::validateArray($this->erRouteMaps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->erAttachments) {
            if (\is_array($this->erAttachments)) {
                $res['ErAttachments'] = [];
                $n1                   = 0;
                foreach ($this->erAttachments as $item1) {
                    $res['ErAttachments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->erRouteEntrys)) {
                $res['ErRouteEntrys'] = [];
                $n1                   = 0;
                foreach ($this->erRouteEntrys as $item1) {
                    $res['ErRouteEntrys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->erRouteMaps) {
            if (\is_array($this->erRouteMaps)) {
                $res['ErRouteMaps'] = [];
                $n1                 = 0;
                foreach ($this->erRouteMaps as $item1) {
                    $res['ErRouteMaps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                   = 0;
                foreach ($map['ErAttachments'] as $item1) {
                    $model->erAttachments[$n1++] = erAttachments::fromMap($item1);
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
                $n1                   = 0;
                foreach ($map['ErRouteEntrys'] as $item1) {
                    $model->erRouteEntrys[$n1++] = erRouteEntrys::fromMap($item1);
                }
            }
        }

        if (isset($map['ErRouteMaps'])) {
            if (!empty($map['ErRouteMaps'])) {
                $model->erRouteMaps = [];
                $n1                 = 0;
                foreach ($map['ErRouteMaps'] as $item1) {
                    $model->erRouteMaps[$n1++] = erRouteMaps::fromMap($item1);
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
