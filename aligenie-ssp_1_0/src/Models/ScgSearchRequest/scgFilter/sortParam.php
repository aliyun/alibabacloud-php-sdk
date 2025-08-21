<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter;

use AlibabaCloud\Dara\Model;

class sortParam extends Model
{
    /**
     * @var string
     */
    public $sortKey;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $sortText;
    protected $_name = [
        'sortKey' => 'SortKey',
        'sortOrder' => 'SortOrder',
        'sortText' => 'SortText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->sortText) {
            $res['SortText'] = $this->sortText;
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
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['SortText'])) {
            $model->sortText = $map['SortText'];
        }

        return $model;
    }
}
