<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'appId'               => 'AppId',
        'appVersions'         => 'AppVersions',
        'level'               => 'Level',
        'outDetailStatParams' => 'OutDetailStatParams',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationRequest
     */
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

        return $model;
    }
}
