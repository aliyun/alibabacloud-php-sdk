<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\MLLabelParam\settings;
use AlibabaCloud\Tea\Model;

class MLLabelParam extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $labelId;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var settings[]
     */
    public $settings;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'     => 'createTime',
        'description'    => 'description',
        'labelId'        => 'labelId',
        'lastModifyTime' => 'lastModifyTime',
        'name'           => 'name',
        'settings'       => 'settings',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->labelId) {
            $res['labelId'] = $this->labelId;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->settings) {
            $res['settings'] = [];
            if (null !== $this->settings && \is_array($this->settings)) {
                $n = 0;
                foreach ($this->settings as $item) {
                    $res['settings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MLLabelParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['labelId'])) {
            $model->labelId = $map['labelId'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['settings'])) {
            if (!empty($map['settings'])) {
                $model->settings = [];
                $n               = 0;
                foreach ($map['settings'] as $item) {
                    $model->settings[$n++] = null !== $item ? settings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
