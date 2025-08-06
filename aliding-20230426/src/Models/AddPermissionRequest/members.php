<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddPermissionRequest;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'corpId' => 'CorpId',
        'id' => 'Id',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
