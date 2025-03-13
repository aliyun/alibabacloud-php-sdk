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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\timedViewPointsResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\timedViewPointsResult\attitudes\viewPoints;
use AlibabaCloud\Tea\Model;

class attitudes extends Model
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
     * @example 2024-01-22 10:29
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 当前观点占比
     *
     * @var string
     */
    public $ratio;

    /**
     * @example 新浪
     *
     * @var string
     */
    public $source;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;

    /**
     * @example http://www.example.com/news/1.html
     *
     * @var string
     */
    public $url;

    /**
     * @var viewPoints[]
     */
    public $viewPoints;
    protected $_name = [
        'attitude' => 'Attitude',
        'attitudeType' => 'AttitudeType',
        'pubTime' => 'PubTime',
        'ratio' => 'Ratio',
        'source' => 'Source',
        'title' => 'Title',
        'url' => 'Url',
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
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
     * @return attitudes
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
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
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
