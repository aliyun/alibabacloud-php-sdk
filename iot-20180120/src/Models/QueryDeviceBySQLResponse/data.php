<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse\data\groups;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse\data\OTAModules;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var OTAModules[]
     */
    public $OTAModules;
    protected $_name = [
        'productKey'  => 'ProductKey',
        'deviceName'  => 'DeviceName',
        'nickname'    => 'Nickname',
        'status'      => 'Status',
        'activeTime'  => 'ActiveTime',
        'iotId'       => 'IotId',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groups'      => 'Groups',
        'tags'        => 'Tags',
        'OTAModules'  => 'OTAModules',
    ];

    public function validate()
    {
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('nickname', $this->nickname, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('activeTime', $this->activeTime, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('groups', $this->groups, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('OTAModules', $this->OTAModules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groups) {
            $res['Groups'] = [];
            if (null !== $this->groups && \is_array($this->groups)) {
                $n = 0;
                foreach ($this->groups as $item) {
                    $res['Groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OTAModules) {
            $res['OTAModules'] = [];
            if (null !== $this->OTAModules && \is_array($this->OTAModules)) {
                $n = 0;
                foreach ($this->OTAModules as $item) {
                    $res['OTAModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n             = 0;
                foreach ($map['Groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OTAModules'])) {
            if (!empty($map['OTAModules'])) {
                $model->OTAModules = [];
                $n                 = 0;
                foreach ($map['OTAModules'] as $item) {
                    $model->OTAModules[$n++] = null !== $item ? OTAModules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
