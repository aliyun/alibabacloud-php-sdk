<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\video;

use AlibabaCloud\Dara\Model;

class narrowBand extends Model
{
    /**
     * @var float
     */
    public $abrmax;

    /**
     * @var float
     */
    public $maxAbrRatio;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'abrmax' => 'Abrmax',
        'maxAbrRatio' => 'MaxAbrRatio',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abrmax) {
            $res['Abrmax'] = $this->abrmax;
        }

        if (null !== $this->maxAbrRatio) {
            $res['MaxAbrRatio'] = $this->maxAbrRatio;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Abrmax'])) {
            $model->abrmax = $map['Abrmax'];
        }

        if (isset($map['MaxAbrRatio'])) {
            $model->maxAbrRatio = $map['MaxAbrRatio'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
