<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GenMetaKnowledgeAssetRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $dbId;
    protected $_name = [
        'dbId' => 'DbId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenMetaKnowledgeAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        return $model;
    }
}
