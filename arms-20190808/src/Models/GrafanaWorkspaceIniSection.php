<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

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
        'section' => 'section',
    ];

    public function validate()
    {
        if (\is_array($this->propertys)) {
            Model::validateArray($this->propertys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertys) {
            if (\is_array($this->propertys)) {
                $res['propertys'] = [];
                $n1 = 0;
                foreach ($this->propertys as $item1) {
                    $res['propertys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->section) {
            $res['section'] = $this->section;
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
        if (isset($map['propertys'])) {
            if (!empty($map['propertys'])) {
                $model->propertys = [];
                $n1 = 0;
                foreach ($map['propertys'] as $item1) {
                    $model->propertys[$n1] = GrafanaWorkspaceIniProperty::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['section'])) {
            $model->section = $map['section'];
        }

        return $model;
    }
}
