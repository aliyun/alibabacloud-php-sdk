<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;

use AlibabaCloud\Dara\Model;

class csvControl extends Model
{
    /**
     * @var int
     */
    public $embedBitsNumberInEachTime;
    /**
     * @var int
     */
    public $embedColumn;
    /**
     * @var string
     */
    public $embedDensity;
    /**
     * @var int
     */
    public $embedPrecision;
    /**
     * @var string
     */
    public $embedTimePosition;
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $timeFormat;
    protected $_name = [
        'embedBitsNumberInEachTime' => 'EmbedBitsNumberInEachTime',
        'embedColumn'               => 'EmbedColumn',
        'embedDensity'              => 'EmbedDensity',
        'embedPrecision'            => 'EmbedPrecision',
        'embedTimePosition'         => 'EmbedTimePosition',
        'method'                    => 'Method',
        'timeFormat'                => 'TimeFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embedBitsNumberInEachTime) {
            $res['EmbedBitsNumberInEachTime'] = $this->embedBitsNumberInEachTime;
        }

        if (null !== $this->embedColumn) {
            $res['EmbedColumn'] = $this->embedColumn;
        }

        if (null !== $this->embedDensity) {
            $res['EmbedDensity'] = $this->embedDensity;
        }

        if (null !== $this->embedPrecision) {
            $res['EmbedPrecision'] = $this->embedPrecision;
        }

        if (null !== $this->embedTimePosition) {
            $res['EmbedTimePosition'] = $this->embedTimePosition;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->timeFormat) {
            $res['TimeFormat'] = $this->timeFormat;
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
        if (isset($map['EmbedBitsNumberInEachTime'])) {
            $model->embedBitsNumberInEachTime = $map['EmbedBitsNumberInEachTime'];
        }

        if (isset($map['EmbedColumn'])) {
            $model->embedColumn = $map['EmbedColumn'];
        }

        if (isset($map['EmbedDensity'])) {
            $model->embedDensity = $map['EmbedDensity'];
        }

        if (isset($map['EmbedPrecision'])) {
            $model->embedPrecision = $map['EmbedPrecision'];
        }

        if (isset($map['EmbedTimePosition'])) {
            $model->embedTimePosition = $map['EmbedTimePosition'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['TimeFormat'])) {
            $model->timeFormat = $map['TimeFormat'];
        }

        return $model;
    }
}
