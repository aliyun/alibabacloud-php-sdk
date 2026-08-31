<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityArchiveTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityArchiveTablesResponseBody\data\archiveTableList;

class data extends Model
{
    /**
     * @var archiveTableList[]
     */
    public $archiveTableList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'archiveTableList' => 'ArchiveTableList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->archiveTableList)) {
            Model::validateArray($this->archiveTableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveTableList) {
            if (\is_array($this->archiveTableList)) {
                $res['ArchiveTableList'] = [];
                $n1 = 0;
                foreach ($this->archiveTableList as $item1) {
                    $res['ArchiveTableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ArchiveTableList'])) {
            if (!empty($map['ArchiveTableList'])) {
                $model->archiveTableList = [];
                $n1 = 0;
                foreach ($map['ArchiveTableList'] as $item1) {
                    $model->archiveTableList[$n1] = archiveTableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
