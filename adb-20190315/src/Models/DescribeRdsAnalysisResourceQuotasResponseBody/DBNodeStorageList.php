<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeStorageList\DBNodeStorage;

class DBNodeStorageList extends Model
{
    /**
     * @var DBNodeStorage[]
     */
    public $DBNodeStorage;
    protected $_name = [
        'DBNodeStorage' => 'DBNodeStorage',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeStorage)) {
            Model::validateArray($this->DBNodeStorage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeStorage) {
            if (\is_array($this->DBNodeStorage)) {
                $res['DBNodeStorage'] = [];
                $n1 = 0;
                foreach ($this->DBNodeStorage as $item1) {
                    $res['DBNodeStorage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBNodeStorage'])) {
            if (!empty($map['DBNodeStorage'])) {
                $model->DBNodeStorage = [];
                $n1 = 0;
                foreach ($map['DBNodeStorage'] as $item1) {
                    $model->DBNodeStorage[$n1] = DBNodeStorage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
