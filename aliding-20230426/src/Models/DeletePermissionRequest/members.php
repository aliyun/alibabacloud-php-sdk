<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\DeletePermissionRequest;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $corpId;

    /**
     * @example ORG
     *
     * @var string
     */
    public $id;

    /**
     * @example ORG
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'corpId' => 'CorpId',
        'id' => 'Id',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return members
     */
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
