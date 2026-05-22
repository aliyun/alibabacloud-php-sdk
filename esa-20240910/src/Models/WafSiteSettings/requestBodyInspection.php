<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings;

use AlibabaCloud\Dara\Model;

class requestBodyInspection extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $sizeLimit;
    protected $_name = [
        'action' => 'Action',
        'id' => 'Id',
        'sizeLimit' => 'SizeLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        return $model;
    }
}
