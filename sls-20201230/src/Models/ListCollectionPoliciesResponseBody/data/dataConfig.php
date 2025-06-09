<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataConfig extends Model
{
    /**
     * @var string
     */
    public $dataProject;

    /**
     * @var string
     */
    public $dataRegion;
    protected $_name = [
        'dataProject' => 'dataProject',
        'dataRegion' => 'dataRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataProject) {
            $res['dataProject'] = $this->dataProject;
        }

        if (null !== $this->dataRegion) {
            $res['dataRegion'] = $this->dataRegion;
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
        if (isset($map['dataProject'])) {
            $model->dataProject = $map['dataProject'];
        }

        if (isset($map['dataRegion'])) {
            $model->dataRegion = $map['dataRegion'];
        }

        return $model;
    }
}
