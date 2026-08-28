<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RewriteChannelTitleResponseBody\module;

use AlibabaCloud\Dara\Model;

class coverImages extends Model
{
    /**
     * @var string
     */
    public $materialFileId;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var int
     */
    public $sortOrder;
    protected $_name = [
        'materialFileId' => 'MaterialFileId',
        'ossUrl' => 'OssUrl',
        'sortOrder' => 'SortOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->materialFileId) {
            $res['MaterialFileId'] = $this->materialFileId;
        }

        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
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
        if (isset($map['MaterialFileId'])) {
            $model->materialFileId = $map['MaterialFileId'];
        }

        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
