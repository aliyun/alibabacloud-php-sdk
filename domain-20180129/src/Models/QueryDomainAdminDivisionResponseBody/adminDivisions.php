<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions\adminDivision;

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
        if (\is_array($this->adminDivision)) {
            Model::validateArray($this->adminDivision);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminDivision) {
            if (\is_array($this->adminDivision)) {
                $res['AdminDivision'] = [];
                $n1 = 0;
                foreach ($this->adminDivision as $item1) {
                    $res['AdminDivision'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AdminDivision'])) {
            if (!empty($map['AdminDivision'])) {
                $model->adminDivision = [];
                $n1 = 0;
                foreach ($map['AdminDivision'] as $item1) {
                    $model->adminDivision[$n1] = adminDivision::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
