<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class QueryMaterialDirectoryTreeRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var bool
     */
    public $hiddenPublic;

    /**
     * @var bool
     */
    public $root;
    protected $_name = [
        'bizId' => 'BizId',
        'hiddenPublic' => 'HiddenPublic',
        'root' => 'Root',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->hiddenPublic) {
            $res['HiddenPublic'] = $this->hiddenPublic;
        }

        if (null !== $this->root) {
            $res['Root'] = $this->root;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['HiddenPublic'])) {
            $model->hiddenPublic = $map['HiddenPublic'];
        }

        if (isset($map['Root'])) {
            $model->root = $map['Root'];
        }

        return $model;
    }
}
