<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

use AlibabaCloud\Dara\Model;

class slsInfo extends Model
{
    /**
     * @var bool
     */
    public $across;
    /**
     * @var string
     */
    public $acrossRole;
    /**
     * @var string
     */
    public $acrossUid;
    /**
     * @var string
     */
    public $project;
    /**
     * @var string
     */
    public $sourceRegionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
