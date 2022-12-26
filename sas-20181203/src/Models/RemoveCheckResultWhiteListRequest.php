<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class RemoveCheckResultWhiteListRequest extends Model
{
    /**
     * @example Deprecated
     *
     * @var string
     */
    public $checkGroupId;

    /**
     * @var int[]
     */
    public $checkIds;

    /**
     * @example Deprecated
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkGroupId' => 'CheckGroupId',
        'checkIds'     => 'CheckIds',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkGroupId) {
            $res['CheckGroupId'] = $this->checkGroupId;
        }
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveCheckResultWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckGroupId'])) {
            $model->checkGroupId = $map['CheckGroupId'];
        }
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = $map['CheckIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
