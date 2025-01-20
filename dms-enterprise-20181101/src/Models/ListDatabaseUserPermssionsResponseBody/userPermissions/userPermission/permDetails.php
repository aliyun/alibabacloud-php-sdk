<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponseBody\userPermissions\userPermission;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponseBody\userPermissions\userPermission\permDetails\permDetail;

class permDetails extends Model
{
    /**
     * @var permDetail[]
     */
    public $permDetail;
    protected $_name = [
        'permDetail' => 'PermDetail',
    ];

    public function validate()
    {
        if (\is_array($this->permDetail)) {
            Model::validateArray($this->permDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permDetail) {
            if (\is_array($this->permDetail)) {
                $res['PermDetail'] = [];
                $n1                = 0;
                foreach ($this->permDetail as $item1) {
                    $res['PermDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PermDetail'])) {
            if (!empty($map['PermDetail'])) {
                $model->permDetail = [];
                $n1                = 0;
                foreach ($map['PermDetail'] as $item1) {
                    $model->permDetail[$n1++] = permDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
