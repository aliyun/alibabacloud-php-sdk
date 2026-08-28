<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SaveChannelDraftRequest;

use AlibabaCloud\Dara\Model;

class coverImages extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $materialFileId;

    /**
     * @var int
     */
    public $sortOrder;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'materialFileId' => 'MaterialFileId',
        'sortOrder' => 'SortOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->materialFileId) {
            $res['MaterialFileId'] = $this->materialFileId;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['MaterialFileId'])) {
            $model->materialFileId = $map['MaterialFileId'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
