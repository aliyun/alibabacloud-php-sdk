<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $configKeys;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $verbose;
    protected $_name = [
        'categoryName' => 'CategoryName',
        'configKeys' => 'ConfigKeys',
        'labels' => 'Labels',
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->configKeys) {
            $res['ConfigKeys'] = $this->configKeys;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
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
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['ConfigKeys'])) {
            $model->configKeys = $map['ConfigKeys'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
