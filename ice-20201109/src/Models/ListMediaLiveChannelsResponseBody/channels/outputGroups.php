<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\outputGroups\mediaPackageGroupSetting;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\outputGroups\outputs;
use AlibabaCloud\Tea\Model;

class outputGroups extends Model
{
    /**
     * @description The MediaPackage destination.
     *
     * @var mediaPackageGroupSetting
     */
    public $mediaPackageGroupSetting;

    /**
     * @description The URL for monitoring the output group. The parameter is returned only when the output gourp type is MediaPackage.
     *
     * @example rtmp://xxx
     *
     * @var string
     */
    public $monitorUrl;

    /**
     * @description The name of the output group.
     *
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @description The outputs in the output group.
     *
     * @var outputs[]
     */
    public $outputs;

    /**
     * @description The output group type.
     *
     * @example MediaPackage
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'mediaPackageGroupSetting' => 'MediaPackageGroupSetting',
        'monitorUrl' => 'MonitorUrl',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaPackageGroupSetting) {
            $res['MediaPackageGroupSetting'] = null !== $this->mediaPackageGroupSetting ? $this->mediaPackageGroupSetting->toMap() : null;
        }
        if (null !== $this->monitorUrl) {
            $res['MonitorUrl'] = $this->monitorUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaPackageGroupSetting'])) {
            $model->mediaPackageGroupSetting = mediaPackageGroupSetting::fromMap($map['MediaPackageGroupSetting']);
        }
        if (isset($map['MonitorUrl'])) {
            $model->monitorUrl = $map['MonitorUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
