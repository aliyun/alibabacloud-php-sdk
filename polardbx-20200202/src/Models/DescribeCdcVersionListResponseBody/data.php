<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcVersionListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $versionList;
    protected $_name = [
        'versionList' => 'VersionList',
    ];

    public function validate()
    {
        if (\is_array($this->versionList)) {
            Model::validateArray($this->versionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionList) {
            if (\is_array($this->versionList)) {
                $res['VersionList'] = [];
                $n1 = 0;
                foreach ($this->versionList as $item1) {
                    $res['VersionList'][$n1] = $item1;
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
        if (isset($map['VersionList'])) {
            if (!empty($map['VersionList'])) {
                $model->versionList = [];
                $n1 = 0;
                foreach ($map['VersionList'] as $item1) {
                    $model->versionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
