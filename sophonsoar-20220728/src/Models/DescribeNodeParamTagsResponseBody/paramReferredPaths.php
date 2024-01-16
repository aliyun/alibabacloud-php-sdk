<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsResponseBody;

use AlibabaCloud\Tea\Model;

class paramReferredPaths extends Model
{
    /**
     * @description The name of the upstream node.
     *
     * @example DataFormat_1
     *
     * @var string
     */
    public $paramName;

    /**
     * @description The paths.
     *
     * @var string[]
     */
    public $referredPath;
    protected $_name = [
        'paramName'    => 'ParamName',
        'referredPath' => 'ReferredPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->referredPath) {
            $res['ReferredPath'] = $this->referredPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramReferredPaths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ReferredPath'])) {
            if (!empty($map['ReferredPath'])) {
                $model->referredPath = $map['ReferredPath'];
            }
        }

        return $model;
    }
}
