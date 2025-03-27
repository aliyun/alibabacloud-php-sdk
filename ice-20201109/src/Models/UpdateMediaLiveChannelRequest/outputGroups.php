<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\outputGroups\mediaPackageGroupSetting;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\outputGroups\outputs;

class outputGroups extends Model
{
    /**
     * @var mediaPackageGroupSetting
     */
    public $mediaPackageGroupSetting;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outputs[]
     */
    public $outputs;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'mediaPackageGroupSetting' => 'MediaPackageGroupSetting',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->mediaPackageGroupSetting) {
            $this->mediaPackageGroupSetting->validate();
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaPackageGroupSetting) {
            $res['MediaPackageGroupSetting'] = null !== $this->mediaPackageGroupSetting ? $this->mediaPackageGroupSetting->toArray($noStream) : $this->mediaPackageGroupSetting;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['MediaPackageGroupSetting'])) {
            $model->mediaPackageGroupSetting = mediaPackageGroupSetting::fromMap($map['MediaPackageGroupSetting']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1++] = outputs::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
