<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceIniSection extends Model
{
    /**
     * @var GrafanaWorkspaceIniProperty[]
     */
    public $propertys;

    /**
     * @var string
     */
    public $section;
    protected $_name = [
        'propertys' => 'propertys',
        'section'   => 'section',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertys) {
            $res['propertys'] = [];
            if (null !== $this->propertys && \is_array($this->propertys)) {
                $n = 0;
                foreach ($this->propertys as $item) {
                    $res['propertys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->section) {
            $res['section'] = $this->section;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceIniSection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['propertys'])) {
            if (!empty($map['propertys'])) {
                $model->propertys = [];
                $n                = 0;
                foreach ($map['propertys'] as $item) {
                    $model->propertys[$n++] = null !== $item ? GrafanaWorkspaceIniProperty::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['section'])) {
            $model->section = $map['section'];
        }

        return $model;
    }
}
