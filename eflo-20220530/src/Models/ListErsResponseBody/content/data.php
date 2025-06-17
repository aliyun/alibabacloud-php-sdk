<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListErsResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErsResponseBody\content\data\tags;

class data extends Model
{
    /**
     * @var int
     */
    public $connections;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $erId;

    /**
     * @var string
     */
    public $erName;

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
     * @var int
     */
    public $routeMaps;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'connections' => 'Connections',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'erId' => 'ErId',
        'erName' => 'ErName',
        'gmtModified' => 'GmtModified',
        'masterZoneId' => 'MasterZoneId',
        'message' => 'Message',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routeMaps' => 'RouteMaps',
        'status' => 'Status',
        'tags' => 'Tags',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }

        if (null !== $this->erName) {
            $res['ErName'] = $this->erName;
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

        if (null !== $this->routeMaps) {
            $res['RouteMaps'] = $this->routeMaps;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }

        if (isset($map['ErName'])) {
            $model->erName = $map['ErName'];
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

        if (isset($map['RouteMaps'])) {
            $model->routeMaps = $map['RouteMaps'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
