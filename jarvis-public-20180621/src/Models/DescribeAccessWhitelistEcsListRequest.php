<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessWhitelistEcsListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'lang'       => 'Lang',
        'sourceCode' => 'SourceCode',
        'sourceIp'   => 'SourceIp',
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
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessWhitelistEcsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
