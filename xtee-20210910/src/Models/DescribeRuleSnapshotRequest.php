<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $snapshotVersion;
    protected $_name = [
        'lang'            => 'Lang',
        'regId'           => 'regId',
        'ruleId'          => 'ruleId',
        'snapshotVersion' => 'snapshotVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->snapshotVersion) {
            $res['snapshotVersion'] = $this->snapshotVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['snapshotVersion'])) {
            $model->snapshotVersion = $map['snapshotVersion'];
        }

        return $model;
    }
}
