<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneRequest;

use AlibabaCloud\Tea\Model;

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
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png
     *
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'corpusList'  => 'CorpusList',
        'description' => 'Description',
        'icon'        => 'Icon',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpusList) {
            $res['CorpusList'] = $this->corpusList;
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

    /**
     * @param array $map
     *
     * @return sceneRelationExtDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpusList'])) {
            if (!empty($map['CorpusList'])) {
                $model->corpusList = $map['CorpusList'];
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
