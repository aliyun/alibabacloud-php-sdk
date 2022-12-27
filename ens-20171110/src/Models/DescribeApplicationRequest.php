<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationRequest extends Model
{
    /**
     * @example a2bac6f4-75dc-455e-8389-2dc8e47526d3
     *
     * @var string
     */
    public $appId;

    /**
     * @example v1,v2
     *
     * @var string
     */
    public $appVersions;

    /**
     * @example National
     *
     * @var string
     */
    public $level;

    /**
     * @example {\"appInfo\":true,\"detailStat\": true, \"appVersionStat\": true, \"districtStat\":true ,\"instanceStat\": true, \"podCountStat\": true}
     *
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
