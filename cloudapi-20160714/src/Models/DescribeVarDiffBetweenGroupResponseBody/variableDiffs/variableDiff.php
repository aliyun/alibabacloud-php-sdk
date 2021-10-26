<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs\variableDiff\pre;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs\variableDiff\release;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs\variableDiff\test;
use AlibabaCloud\Tea\Model;

class variableDiff extends Model
{
    /**
     * @var string
     */
    public $varName;

    /**
     * @var test
     */
    public $test;

    /**
     * @var pre
     */
    public $pre;

    /**
     * @var release
     */
    public $release;
    protected $_name = [
        'varName' => 'VarName',
        'test'    => 'Test',
        'pre'     => 'Pre',
        'release' => 'Release',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->varName) {
            $res['VarName'] = $this->varName;
        }
        if (null !== $this->test) {
            $res['Test'] = null !== $this->test ? $this->test->toMap() : null;
        }
        if (null !== $this->pre) {
            $res['Pre'] = null !== $this->pre ? $this->pre->toMap() : null;
        }
        if (null !== $this->release) {
            $res['Release'] = null !== $this->release ? $this->release->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableDiff
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VarName'])) {
            $model->varName = $map['VarName'];
        }
        if (isset($map['Test'])) {
            $model->test = test::fromMap($map['Test']);
        }
        if (isset($map['Pre'])) {
            $model->pre = pre::fromMap($map['Pre']);
        }
        if (isset($map['Release'])) {
            $model->release = release::fromMap($map['Release']);
        }

        return $model;
    }
}
