<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision;
use AlibabaCloud\Tea\Model;

class adminDivisions extends Model
{
    /**
     * @var adminDivision[]
     */
    public $adminDivision;
    protected $_name = [
        'adminDivision' => 'AdminDivision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminDivision) {
            $res['AdminDivision'] = [];
            if (null !== $this->adminDivision && \is_array($this->adminDivision)) {
                $n = 0;
                foreach ($this->adminDivision as $item) {
                    $res['AdminDivision'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adminDivisions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminDivision'])) {
            if (!empty($map['AdminDivision'])) {
                $model->adminDivision = [];
                $n                    = 0;
                foreach ($map['AdminDivision'] as $item) {
                    $model->adminDivision[$n++] = null !== $item ? adminDivision::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
