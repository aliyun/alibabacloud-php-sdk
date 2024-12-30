<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

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
     * @example yyy
     *
     * @var string
     */
    public $acrossRole;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $acrossUid;

    /**
     * @example test-project
     *
     * @var string
     */
    public $project;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description sls logstore。
     *
     * @example test-store
     *
     * @var string
     */
    public $store;
    protected $_name = [
        'across'         => 'Across',
        'acrossRole'     => 'AcrossRole',
        'acrossUid'      => 'AcrossUid',
        'project'        => 'Project',
        'sourceRegionId' => 'SourceRegionId',
        'store'          => 'Store',
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
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->store) {
            $res['Store'] = $this->store;
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
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['Store'])) {
            $model->store = $map['Store'];
        }

        return $model;
    }
}
