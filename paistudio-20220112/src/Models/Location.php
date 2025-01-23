<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class Location extends Model
{
    /**
     * @var string
     */
    public $locationType;
    /**
     * @var mixed[]
     */
    public $locationValue;
    protected $_name = [
        'locationType'  => 'LocationType',
        'locationValue' => 'LocationValue',
    ];

    public function validate()
    {
        if (\is_array($this->locationValue)) {
            Model::validateArray($this->locationValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locationType) {
            $res['LocationType'] = $this->locationType;
        }

        if (null !== $this->locationValue) {
            if (\is_array($this->locationValue)) {
                $res['LocationValue'] = [];
                foreach ($this->locationValue as $key1 => $value1) {
                    $res['LocationValue'][$key1] = $value1;
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
        if (isset($map['LocationType'])) {
            $model->locationType = $map['LocationType'];
        }

        if (isset($map['LocationValue'])) {
            if (!empty($map['LocationValue'])) {
                $model->locationValue = [];
                foreach ($map['LocationValue'] as $key1 => $value1) {
                    $model->locationValue[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
