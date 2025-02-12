<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Dara\Model;

class CreateTaskOrderRequest extends Model
{
    /**
     * @var string
     */
    public $createUserId;
    /**
     * @var bool
     */
    public $isUrgent;
    /**
     * @var string
     */
    public $openGroupId;
    /**
     * @var string
     */
    public $overview;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $urgentDescription;
    protected $_name = [
        'createUserId'      => 'CreateUserId',
        'isUrgent'          => 'IsUrgent',
        'openGroupId'       => 'OpenGroupId',
        'overview'          => 'Overview',
        'productCode'       => 'ProductCode',
        'urgentDescription' => 'UrgentDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->isUrgent) {
            $res['IsUrgent'] = $this->isUrgent;
        }

        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }

        if (null !== $this->overview) {
            $res['Overview'] = $this->overview;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->urgentDescription) {
            $res['UrgentDescription'] = $this->urgentDescription;
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
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['IsUrgent'])) {
            $model->isUrgent = $map['IsUrgent'];
        }

        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }

        if (isset($map['Overview'])) {
            $model->overview = $map['Overview'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['UrgentDescription'])) {
            $model->urgentDescription = $map['UrgentDescription'];
        }

        return $model;
    }
}
