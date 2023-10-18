<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease\releaseInfo\releaseInfoList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseInfoList) {
            $res['ReleaseInfoList'] = [];
            if (null !== $this->releaseInfoList && \is_array($this->releaseInfoList)) {
                $n = 0;
                foreach ($this->releaseInfoList as $item) {
                    $res['ReleaseInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseInfoList'])) {
            if (!empty($map['ReleaseInfoList'])) {
                $model->releaseInfoList = [];
                $n                      = 0;
                foreach ($map['ReleaseInfoList'] as $item) {
                    $model->releaseInfoList[$n++] = null !== $item ? releaseInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
