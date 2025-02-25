<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;

class UpdateFilterRequest extends Model
{
    /**
     * @var string
     */
    public $filterConfiguration;
    /**
     * @var string
     */
    public $filterName;
    protected $_name = [
        'filterConfiguration' => 'FilterConfiguration',
        'filterName'          => 'FilterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterConfiguration) {
            $res['FilterConfiguration'] = $this->filterConfiguration;
        }

        if (null !== $this->filterName) {
            $res['FilterName'] = $this->filterName;
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
        if (isset($map['FilterConfiguration'])) {
            $model->filterConfiguration = $map['FilterConfiguration'];
        }

        if (isset($map['FilterName'])) {
            $model->filterName = $map['FilterName'];
        }

        return $model;
    }
}
