<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListSecurityStrategiesRequest extends Model
{
    /**
     * @var string
     */
    public $controlModule;

    /**
     * @var string
     */
    public $controlSubModule;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'controlModule' => 'ControlModule',
        'controlSubModule' => 'ControlSubModule',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlModule) {
            $res['ControlModule'] = $this->controlModule;
        }

        if (null !== $this->controlSubModule) {
            $res['ControlSubModule'] = $this->controlSubModule;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ControlModule'])) {
            $model->controlModule = $map['ControlModule'];
        }

        if (isset($map['ControlSubModule'])) {
            $model->controlSubModule = $map['ControlSubModule'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
