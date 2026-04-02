<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\destinationDataSourceSettings;

use AlibabaCloud\Dara\Model;

class dataSourceProperties extends Model
{
    /**
     * @var string
     */
    public $connectionProperties;
    protected $_name = [
        'connectionProperties' => 'ConnectionProperties',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
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
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }

        return $model;
    }
}
