<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTimedViewAttitudeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTimedViewAttitudeResponseBody\data\viewPoints;

class data extends Model
{
    /**
     * @var string
     */
    public $attitude;
    /**
     * @var string
     */
    public $attitudeType;
    /**
     * @var string
     */
    public $pubTime;
    /**
     * @var string
     */
    public $ratio;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $url;
    /**
     * @var viewPoints[]
     */
    public $viewPoints;
    protected $_name = [
        'attitude'     => 'Attitude',
        'attitudeType' => 'AttitudeType',
        'pubTime'      => 'PubTime',
        'ratio'        => 'Ratio',
        'source'       => 'Source',
        'title'        => 'Title',
        'url'          => 'Url',
        'viewPoints'   => 'ViewPoints',
    ];

    public function validate()
    {
        if (\is_array($this->viewPoints)) {
            Model::validateArray($this->viewPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->viewPoints)) {
                $res['ViewPoints'] = [];
                $n1                = 0;
                foreach ($this->viewPoints as $item1) {
                    $res['ViewPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                = 0;
                foreach ($map['ViewPoints'] as $item1) {
                    $model->viewPoints[$n1++] = viewPoints::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
