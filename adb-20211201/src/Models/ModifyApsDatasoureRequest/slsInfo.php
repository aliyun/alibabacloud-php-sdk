<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class slsInfo extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $across;

    /**
     * @example test-role
     *
     * @var string
     */
    public $acrossRole;

    /**
     * @example 123456
     *
     * @var string
     */
    public $acrossUid;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegionId;
    protected $_name = [
        'across'         => 'Across',
        'acrossRole'     => 'AcrossRole',
        'acrossUid'      => 'AcrossUid',
        'sourceRegionId' => 'SourceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->across) {
            $res['Across'] = $this->across;
        }
        if (null !== $this->acrossRole) {
            $res['AcrossRole'] = $this->acrossRole;
        }
        if (null !== $this->acrossUid) {
            $res['AcrossUid'] = $this->acrossUid;
        }
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Across'])) {
            $model->across = $map['Across'];
        }
        if (isset($map['AcrossRole'])) {
            $model->acrossRole = $map['AcrossRole'];
        }
        if (isset($map['AcrossUid'])) {
            $model->acrossUid = $map['AcrossUid'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }

        return $model;
    }
}
