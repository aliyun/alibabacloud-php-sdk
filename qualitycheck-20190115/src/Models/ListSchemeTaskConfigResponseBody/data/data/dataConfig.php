<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs;

class dataConfig extends Model
{
    /**
     * @var assignConfigs
     */
    public $assignConfigs;
    /**
     * @var string
     */
    public $dataSets;
    /**
     * @var int
     */
    public $index;
    /**
     * @var string
     */
    public $resultParam;
    protected $_name = [
        'assignConfigs' => 'AssignConfigs',
        'dataSets'      => 'DataSets',
        'index'         => 'Index',
        'resultParam'   => 'ResultParam',
    ];

    public function validate()
    {
        if (null !== $this->assignConfigs) {
            $this->assignConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignConfigs) {
            $res['AssignConfigs'] = null !== $this->assignConfigs ? $this->assignConfigs->toArray($noStream) : $this->assignConfigs;
        }

        if (null !== $this->dataSets) {
            $res['DataSets'] = $this->dataSets;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->resultParam) {
            $res['ResultParam'] = $this->resultParam;
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
        if (isset($map['AssignConfigs'])) {
            $model->assignConfigs = assignConfigs::fromMap($map['AssignConfigs']);
        }

        if (isset($map['DataSets'])) {
            $model->dataSets = $map['DataSets'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['ResultParam'])) {
            $model->resultParam = $map['ResultParam'];
        }

        return $model;
    }
}
