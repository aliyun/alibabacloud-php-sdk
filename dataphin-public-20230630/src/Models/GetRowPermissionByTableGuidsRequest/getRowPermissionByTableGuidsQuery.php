<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetRowPermissionByTableGuidsRequest;

use AlibabaCloud\Dara\Model;

class getRowPermissionByTableGuidsQuery extends Model
{
    /**
     * @var string[]
     */
    public $tableGuids;
    protected $_name = [
        'tableGuids' => 'TableGuids',
    ];

    public function validate()
    {
        if (\is_array($this->tableGuids)) {
            Model::validateArray($this->tableGuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableGuids) {
            if (\is_array($this->tableGuids)) {
                $res['TableGuids'] = [];
                $n1 = 0;
                foreach ($this->tableGuids as $item1) {
                    $res['TableGuids'][$n1] = $item1;
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
        if (isset($map['TableGuids'])) {
            if (!empty($map['TableGuids'])) {
                $model->tableGuids = [];
                $n1 = 0;
                foreach ($map['TableGuids'] as $item1) {
                    $model->tableGuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
