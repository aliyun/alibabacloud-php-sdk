<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\sourceDataSourceSettings;

use AlibabaCloud\Dara\Model;

class dataSourceProperties extends Model
{
    /**
     * @var string
     */
    public $encoding;
    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'encoding' => 'Encoding',
        'timezone' => 'Timezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
