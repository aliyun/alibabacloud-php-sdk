<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersions;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $outDetailStatParams;

    /**
     * @var string
     */
    public $resourceSelector;
    protected $_name = [
        'appId' => 'AppId',
        'appVersions' => 'AppVersions',
        'level' => 'Level',
        'outDetailStatParams' => 'OutDetailStatParams',
        'resourceSelector' => 'ResourceSelector',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appVersions) {
            $res['AppVersions'] = $this->appVersions;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->outDetailStatParams) {
            $res['OutDetailStatParams'] = $this->outDetailStatParams;
        }

        if (null !== $this->resourceSelector) {
            $res['ResourceSelector'] = $this->resourceSelector;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppVersions'])) {
            $model->appVersions = $map['AppVersions'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['OutDetailStatParams'])) {
            $model->outDetailStatParams = $map['OutDetailStatParams'];
        }

        if (isset($map['ResourceSelector'])) {
            $model->resourceSelector = $map['ResourceSelector'];
        }

        return $model;
    }
}
