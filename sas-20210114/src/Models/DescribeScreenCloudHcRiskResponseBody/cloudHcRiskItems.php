<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenCloudHcRiskResponseBody;

use AlibabaCloud\Tea\Model;

class cloudHcRiskItems extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $affectCount;

    /**
     * @example OSS-PublicReadOpenManifestFileWithoutEncryption
     *
     * @var string
     */
    public $checkItem;

    /**
     * @example HIGH
     *
     * @var string
     */
    public $level;

    /**
     * @var bool
     */
    public $pass;
    protected $_name = [
        'affectCount' => 'AffectCount',
        'checkItem' => 'CheckItem',
        'level' => 'Level',
        'pass' => 'Pass',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectCount) {
            $res['AffectCount'] = $this->affectCount;
        }
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudHcRiskItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectCount'])) {
            $model->affectCount = $map['AffectCount'];
        }
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }

        return $model;
    }
}
