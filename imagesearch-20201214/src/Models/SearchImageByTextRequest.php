<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;

class SearchImageByTextRequest extends Model
{
    /**
     * @var bool
     */
    public $distinctProductId;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $scoreThreshold;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'distinctProductId' => 'DistinctProductId',
        'filter' => 'Filter',
        'instanceName' => 'InstanceName',
        'num' => 'Num',
        'scoreThreshold' => 'ScoreThreshold',
        'start' => 'Start',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distinctProductId) {
            $res['DistinctProductId'] = $this->distinctProductId;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['DistinctProductId'])) {
            $model->distinctProductId = $map['DistinctProductId'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
