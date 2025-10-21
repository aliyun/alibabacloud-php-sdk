<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Function_ extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $functionLanguage;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'className' => 'className',
        'description' => 'description',
        'functionLanguage' => 'functionLanguage',
        'functionType' => 'functionType',
        'gmtModified' => 'gmtModified',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->functionLanguage) {
            $res['functionLanguage'] = $this->functionLanguage;
        }

        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['functionLanguage'])) {
            $model->functionLanguage = $map['functionLanguage'];
        }

        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
