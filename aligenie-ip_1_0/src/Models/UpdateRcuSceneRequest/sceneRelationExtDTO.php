<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateRcuSceneRequest;

use AlibabaCloud\Dara\Model;

class sceneRelationExtDTO extends Model
{
    /**
     * @var string[]
     */
    public $corpusList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'corpusList' => 'CorpusList',
        'description' => 'Description',
        'icon' => 'Icon',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->corpusList)) {
            Model::validateArray($this->corpusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpusList) {
            if (\is_array($this->corpusList)) {
                $res['CorpusList'] = [];
                $n1 = 0;
                foreach ($this->corpusList as $item1) {
                    $res['CorpusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CorpusList'])) {
            if (!empty($map['CorpusList'])) {
                $model->corpusList = [];
                $n1 = 0;
                foreach ($map['CorpusList'] as $item1) {
                    $model->corpusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
