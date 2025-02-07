<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Opt\V20210730\Models;

use AlibabaCloud\Dara\Model;

class GetOrderInfoRequest extends Model
{
    /**
     * @var bool
     */
    public $listReleased;
    /**
     * @var string
     */
    public $relService;
    /**
     * @var int
     */
    public $resourceType;
    protected $_name = [
        'listReleased' => 'ListReleased',
        'relService'   => 'RelService',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listReleased) {
            $res['ListReleased'] = $this->listReleased;
        }

        if (null !== $this->relService) {
            $res['RelService'] = $this->relService;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ListReleased'])) {
            $model->listReleased = $map['ListReleased'];
        }

        if (isset($map['RelService'])) {
            $model->relService = $map['RelService'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
