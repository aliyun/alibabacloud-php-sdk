<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords\extendContentJson\rpmEntityList;

class extendContentJson extends Model
{
    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osRelease;

    /**
     * @var rpmEntityList[]
     */
    public $rpmEntityList;
    protected $_name = [
        'os' => 'Os',
        'osRelease' => 'OsRelease',
        'rpmEntityList' => 'RpmEntityList',
    ];

    public function validate()
    {
        if (\is_array($this->rpmEntityList)) {
            Model::validateArray($this->rpmEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osRelease) {
            $res['OsRelease'] = $this->osRelease;
        }

        if (null !== $this->rpmEntityList) {
            if (\is_array($this->rpmEntityList)) {
                $res['RpmEntityList'] = [];
                $n1 = 0;
                foreach ($this->rpmEntityList as $item1) {
                    $res['RpmEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsRelease'])) {
            $model->osRelease = $map['OsRelease'];
        }

        if (isset($map['RpmEntityList'])) {
            if (!empty($map['RpmEntityList'])) {
                $model->rpmEntityList = [];
                $n1 = 0;
                foreach ($map['RpmEntityList'] as $item1) {
                    $model->rpmEntityList[$n1] = rpmEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
