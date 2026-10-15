<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandiseSceneDetectionResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandiseSceneDetectionResponseBody\data\result\scenes\sceneLocation;

class scenes extends Model
{
    /**
     * @var float
     */
    public $areaRate;

    /**
     * @var float
     */
    public $ownPurity;

    /**
     * @var float
     */
    public $plumpness;

    /**
     * @var string
     */
    public $sceneActualName;

    /**
     * @var float[]
     */
    public $sceneCenter;

    /**
     * @var sceneLocation[]
     */
    public $sceneLocation;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var float
     */
    public $shelfDistributionRate;
    protected $_name = [
        'areaRate' => 'AreaRate',
        'ownPurity' => 'OwnPurity',
        'plumpness' => 'Plumpness',
        'sceneActualName' => 'SceneActualName',
        'sceneCenter' => 'SceneCenter',
        'sceneLocation' => 'SceneLocation',
        'sceneName' => 'SceneName',
        'shelfDistributionRate' => 'ShelfDistributionRate',
    ];

    public function validate()
    {
        if (\is_array($this->sceneCenter)) {
            Model::validateArray($this->sceneCenter);
        }
        if (\is_array($this->sceneLocation)) {
            Model::validateArray($this->sceneLocation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaRate) {
            $res['AreaRate'] = $this->areaRate;
        }

        if (null !== $this->ownPurity) {
            $res['OwnPurity'] = $this->ownPurity;
        }

        if (null !== $this->plumpness) {
            $res['Plumpness'] = $this->plumpness;
        }

        if (null !== $this->sceneActualName) {
            $res['SceneActualName'] = $this->sceneActualName;
        }

        if (null !== $this->sceneCenter) {
            if (\is_array($this->sceneCenter)) {
                $res['SceneCenter'] = [];
                $n1 = 0;
                foreach ($this->sceneCenter as $item1) {
                    $res['SceneCenter'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sceneLocation) {
            if (\is_array($this->sceneLocation)) {
                $res['SceneLocation'] = [];
                $n1 = 0;
                foreach ($this->sceneLocation as $item1) {
                    $res['SceneLocation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->shelfDistributionRate) {
            $res['ShelfDistributionRate'] = $this->shelfDistributionRate;
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
        if (isset($map['AreaRate'])) {
            $model->areaRate = $map['AreaRate'];
        }

        if (isset($map['OwnPurity'])) {
            $model->ownPurity = $map['OwnPurity'];
        }

        if (isset($map['Plumpness'])) {
            $model->plumpness = $map['Plumpness'];
        }

        if (isset($map['SceneActualName'])) {
            $model->sceneActualName = $map['SceneActualName'];
        }

        if (isset($map['SceneCenter'])) {
            if (!empty($map['SceneCenter'])) {
                $model->sceneCenter = [];
                $n1 = 0;
                foreach ($map['SceneCenter'] as $item1) {
                    $model->sceneCenter[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneLocation'])) {
            if (!empty($map['SceneLocation'])) {
                $model->sceneLocation = [];
                $n1 = 0;
                foreach ($map['SceneLocation'] as $item1) {
                    $model->sceneLocation[$n1] = sceneLocation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['ShelfDistributionRate'])) {
            $model->shelfDistributionRate = $map['ShelfDistributionRate'];
        }

        return $model;
    }
}
