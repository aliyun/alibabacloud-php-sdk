<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsResponseBody\data\comments;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsResponseBody\data\viewPoints;
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
     * @var comments[]
     */
    public $comments;

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
        'attitude' => 'Attitude',
        'attitudeType' => 'AttitudeType',
        'comments' => 'Comments',
        'ratio' => 'Ratio',
        'viewPoints' => 'ViewPoints',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }
        if (null !== $this->attitudeType) {
            $res['AttitudeType'] = $this->attitudeType;
        }
        if (null !== $this->comments) {
            $res['Comments'] = [];
            if (null !== $this->comments && \is_array($this->comments)) {
                $n = 0;
                foreach ($this->comments as $item) {
                    $res['Comments'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Comments'])) {
            if (!empty($map['Comments'])) {
                $model->comments = [];
                $n = 0;
                foreach ($map['Comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['ViewPoints'])) {
            if (!empty($map['ViewPoints'])) {
                $model->viewPoints = [];
                $n = 0;
                foreach ($map['ViewPoints'] as $item) {
                    $model->viewPoints[$n++] = null !== $item ? viewPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
