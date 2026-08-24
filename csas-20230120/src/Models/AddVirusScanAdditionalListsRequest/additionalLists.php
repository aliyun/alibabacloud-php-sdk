<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\AddVirusScanAdditionalListsRequest;

use AlibabaCloud\Dara\Model;

class additionalLists extends Model
{
    /**
     * @var string
     */
    public $additionalType;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $listType;
    protected $_name = [
        'additionalType' => 'AdditionalType',
        'detail' => 'Detail',
        'listType' => 'ListType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalType) {
            $res['AdditionalType'] = $this->additionalType;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
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
        if (isset($map['AdditionalType'])) {
            $model->additionalType = $map['AdditionalType'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        return $model;
    }
}
