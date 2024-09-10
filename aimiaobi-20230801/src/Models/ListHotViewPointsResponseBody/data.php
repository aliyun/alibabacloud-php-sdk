<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponseBody\data\news;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponseBody\data\viewPoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 当前观点
     *
     * @var string
     */
    public $attitude;

    /**
     * @example 观点类型
     *
     * @var string
     */
    public $attitudeType;

    /**
     * @var news[]
     */
    public $news;

    /**
     * @example 当前观点占比
     *
     * @var string
     */
    public $ratio;

    /**
     * @var viewPoints[]
     */
    public $viewPoints;
    protected $_name = [
        'attitude'     => 'Attitude',
        'attitudeType' => 'AttitudeType',
        'news'         => 'News',
        'ratio'        => 'Ratio',
        'viewPoints'   => 'ViewPoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }
        if (null !== $this->attitudeType) {
            $res['AttitudeType'] = $this->attitudeType;
        }
        if (null !== $this->news) {
            $res['News'] = [];
            if (null !== $this->news && \is_array($this->news)) {
                $n = 0;
                foreach ($this->news as $item) {
                    $res['News'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->viewPoints) {
            $res['ViewPoints'] = [];
            if (null !== $this->viewPoints && \is_array($this->viewPoints)) {
                $n = 0;
                foreach ($this->viewPoints as $item) {
                    $res['ViewPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attitude'])) {
            $model->attitude = $map['Attitude'];
        }
        if (isset($map['AttitudeType'])) {
            $model->attitudeType = $map['AttitudeType'];
        }
        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n           = 0;
                foreach ($map['News'] as $item) {
                    $model->news[$n++] = null !== $item ? news::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['ViewPoints'])) {
            if (!empty($map['ViewPoints'])) {
                $model->viewPoints = [];
                $n                 = 0;
                foreach ($map['ViewPoints'] as $item) {
                    $model->viewPoints[$n++] = null !== $item ? viewPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
