<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveClusterResponseBody\data;

use AlibabaCloud\Dara\Model;

class formats extends Model
{
    /**
     * @var string
     */
    public $formatName;
    /**
     * @var float
     */
    public $formatRatio;
    /**
     * @var int
     */
    public $formatSize;
    /**
     * @var string
     */
    public $formatSizeUnit;
    protected $_name = [
        'formatName'     => 'FormatName',
        'formatRatio'    => 'FormatRatio',
        'formatSize'     => 'FormatSize',
        'formatSizeUnit' => 'FormatSizeUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }

        if (null !== $this->formatRatio) {
            $res['FormatRatio'] = $this->formatRatio;
        }

        if (null !== $this->formatSize) {
            $res['FormatSize'] = $this->formatSize;
        }

        if (null !== $this->formatSizeUnit) {
            $res['FormatSizeUnit'] = $this->formatSizeUnit;
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
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }

        if (isset($map['FormatRatio'])) {
            $model->formatRatio = $map['FormatRatio'];
        }

        if (isset($map['FormatSize'])) {
            $model->formatSize = $map['FormatSize'];
        }

        if (isset($map['FormatSizeUnit'])) {
            $model->formatSizeUnit = $map['FormatSizeUnit'];
        }

        return $model;
    }
}
