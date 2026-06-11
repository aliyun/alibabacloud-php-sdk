<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillVersionDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DataResourceValue;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var DataResourceValue[]
     */
    public $resource;

    /**
     * @var string
     */
    public $skillMd;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'resource' => 'Resource',
        'skillMd' => 'SkillMd',
    ];

    public function validate()
    {
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['Resource'] = [];
                foreach ($this->resource as $key1 => $value1) {
                    $res['Resource'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->skillMd) {
            $res['SkillMd'] = $this->skillMd;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                foreach ($map['Resource'] as $key1 => $value1) {
                    $model->resource[$key1] = DataResourceValue::fromMap($value1);
                }
            }
        }

        if (isset($map['SkillMd'])) {
            $model->skillMd = $map['SkillMd'];
        }

        return $model;
    }
}
