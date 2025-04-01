<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion\versionRelease;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion\versionRelease\releaseInfo\releaseInfoList;

class releaseInfo extends Model
{
    /**
     * @var releaseInfoList[]
     */
    public $releaseInfoList;
    protected $_name = [
        'releaseInfoList' => 'ReleaseInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->releaseInfoList)) {
            Model::validateArray($this->releaseInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseInfoList) {
            if (\is_array($this->releaseInfoList)) {
                $res['ReleaseInfoList'] = [];
                $n1 = 0;
                foreach ($this->releaseInfoList as $item1) {
                    $res['ReleaseInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReleaseInfoList'])) {
            if (!empty($map['ReleaseInfoList'])) {
                $model->releaseInfoList = [];
                $n1 = 0;
                foreach ($map['ReleaseInfoList'] as $item1) {
                    $model->releaseInfoList[$n1++] = releaseInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
