<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryDeleteTaskCheckDataResponseBody;

use AlibabaCloud\Dara\Model;

class taskCheckDataDtoList extends Model
{
    /**
     * @var string
     */
    public $checkerDesc;

    /**
     * @var string
     */
    public $checkerName;

    /**
     * @var string
     */
    public $checkerUniKey;

    /**
     * @var string
     */
    public $dependencyLevel;
    protected $_name = [
        'checkerDesc' => 'CheckerDesc',
        'checkerName' => 'CheckerName',
        'checkerUniKey' => 'CheckerUniKey',
        'dependencyLevel' => 'DependencyLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkerDesc) {
            $res['CheckerDesc'] = $this->checkerDesc;
        }

        if (null !== $this->checkerName) {
            $res['CheckerName'] = $this->checkerName;
        }

        if (null !== $this->checkerUniKey) {
            $res['CheckerUniKey'] = $this->checkerUniKey;
        }

        if (null !== $this->dependencyLevel) {
            $res['DependencyLevel'] = $this->dependencyLevel;
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
        if (isset($map['CheckerDesc'])) {
            $model->checkerDesc = $map['CheckerDesc'];
        }

        if (isset($map['CheckerName'])) {
            $model->checkerName = $map['CheckerName'];
        }

        if (isset($map['CheckerUniKey'])) {
            $model->checkerUniKey = $map['CheckerUniKey'];
        }

        if (isset($map['DependencyLevel'])) {
            $model->dependencyLevel = $map['DependencyLevel'];
        }

        return $model;
    }
}
