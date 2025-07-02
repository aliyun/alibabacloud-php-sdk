<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppOtaVersionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $versionUidList;
    protected $_name = [
        'versionUidList' => 'VersionUidList',
    ];

    public function validate()
    {
        if (\is_array($this->versionUidList)) {
            Model::validateArray($this->versionUidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionUidList) {
            if (\is_array($this->versionUidList)) {
                $res['VersionUidList'] = [];
                $n1 = 0;
                foreach ($this->versionUidList as $item1) {
                    $res['VersionUidList'][$n1] = $item1;
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
        if (isset($map['VersionUidList'])) {
            if (!empty($map['VersionUidList'])) {
                $model->versionUidList = [];
                $n1 = 0;
                foreach ($map['VersionUidList'] as $item1) {
                    $model->versionUidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
