<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class effectMsgDTOS extends Model
{
    /**
     * @description Hit
     *
     * @example fastjson(jar) extendField.safemode equals false
     *
     * @var string
     */
    public $matchList;

    /**
     * @description Path
     *
     * @example /uat6/qry/enquiry/policy/yrtPolicyList
     *
     * @var string
     */
    public $path;

    /**
     * @description Software name
     *
     * @example python-perf 3.10.0
     *
     * @var string
     */
    public $softName;
    protected $_name = [
        'matchList' => 'MatchList',
        'path'      => 'Path',
        'softName'  => 'SoftName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchList) {
            $res['MatchList'] = $this->matchList;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->softName) {
            $res['SoftName'] = $this->softName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effectMsgDTOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchList'])) {
            $model->matchList = $map['MatchList'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['SoftName'])) {
            $model->softName = $map['SoftName'];
        }

        return $model;
    }
}
