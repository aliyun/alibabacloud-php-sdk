<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryAppMetadataRequest extends Model
{
    /**
     * @description The array of meta Ids.
     *
     * @example 4c9dd447,3c76c565
     *
     * @var string
     */
    public $metaIds;

    /**
     * @description The mata type.
     *
     * @example sql
     *
     * @var string
     */
    public $metaType;

    /**
     * @description The ID of the application.
     *
     * Log on to the **ARMS console**. In the left-side navigation pane, choose **Browser Monitoring** > **Browser Monitoring**. On the Browser Monitoring page, click the name of an application. The URL in the address bar contains the process ID (PID) of the application. The PID is indicated in the pid=xxx format. The PID is usually percent encoded as xxx%40xxx. You must modify this value to remove the percent encoding. For example, if the PID in the URL is eb4zdose6v%409781be0f44d\*\*\*\*, you must replace %40 with an at sign (@) to obtain eb4zdose6v@9781be0f44d\*\*\*\*.
     * @example ggxw4lnjuz@54364d85b97dc56
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'metaIds'  => 'MetaIds',
        'metaType' => 'MetaType',
        'pid'      => 'Pid',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaIds) {
            $res['MetaIds'] = $this->metaIds;
        }
        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAppMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaIds'])) {
            $model->metaIds = $map['MetaIds'];
        }
        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
