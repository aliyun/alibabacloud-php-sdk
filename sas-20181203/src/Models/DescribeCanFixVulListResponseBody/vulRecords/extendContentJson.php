<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords\extendContentJson\rpmEntityList;
use AlibabaCloud\Tea\Model;

class extendContentJson extends Model
{
    /**
     * @description The name of the operating system.
     *
     * @example debian
     *
     * @var string
     */
    public $os;

    /**
     * @description The version of the operating system in the image.
     *
     * @example 10.9
     *
     * @var string
     */
    public $osRelease;

    /**
     * @description The RPM packages.
     *
     * @var rpmEntityList[]
     */
    public $rpmEntityList;
    protected $_name = [
        'os'            => 'Os',
        'osRelease'     => 'OsRelease',
        'rpmEntityList' => 'RpmEntityList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osRelease) {
            $res['OsRelease'] = $this->osRelease;
        }
        if (null !== $this->rpmEntityList) {
            $res['RpmEntityList'] = [];
            if (null !== $this->rpmEntityList && \is_array($this->rpmEntityList)) {
                $n = 0;
                foreach ($this->rpmEntityList as $item) {
                    $res['RpmEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendContentJson
     */
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
                $n                    = 0;
                foreach ($map['RpmEntityList'] as $item) {
                    $model->rpmEntityList[$n++] = null !== $item ? rpmEntityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
